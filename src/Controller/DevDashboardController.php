<?php

namespace App\Controller;

use App\Entity\FicheDePoste;
use App\Form\DevProfileType;
use App\Repository\FicheDePosteRepository;
use App\Repository\CompetenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route('/dev')]
#[IsGranted('ROLE_DEV')]
class DevDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dev_dashboard')]
    public function index(Request $request, FicheDePosteRepository $ficheDePosteRepository, CompetenceRepository $competenceRepository): Response
    {
        /** @var \App\Entity\Dev $dev */
        $dev = $this->getUser();

        // Récupérer les fiches de poste qui correspondent au profil
        $matchingFiches = $ficheDePosteRepository->findMatchingFichesForDev($dev);

        // Calculer les scores de correspondance pour chaque fiche
        foreach ($matchingFiches as $fiche) {
            $fiche->calculateMatchScore($dev);
        }

        // Récupérer les fiches de poste les plus populaires
        $topFiches = $ficheDePosteRepository->findBy([], ['viewCount' => 'DESC'], 6);

        // Calculer les scores pour les fiches populaires aussi
        foreach ($topFiches as $fiche) {
            $fiche->calculateMatchScore($dev);
        }

        // Récupérer toutes les compétences pour le formulaire de recherche
        $competences = $competenceRepository->findAll();

        // Gérer la recherche si des paramètres sont présents
        $searchParams = $request->query->all();
        if (!empty($searchParams)) {
            $fiches = $ficheDePosteRepository->searchFiches(
                isset($searchParams['competences']) ? explode(',', $searchParams['competences']) : null,
                $searchParams['localisation'] ?? null,
                isset($searchParams['salaireMin']) ? (int)$searchParams['salaireMin'] : null,
                isset($searchParams['salaireMax']) ? (int)$searchParams['salaireMax'] : null,
                isset($searchParams['niveauExperience']) ? (int)$searchParams['niveauExperience'] : null
            );
            $matchingFiches = $fiches;
        }

        return $this->render('dev/dashboard.html.twig', [
            'matchingFiches' => $matchingFiches,
            'topFiches' => $topFiches,
            'competences' => $competences,
            'searchParams' => $searchParams ?? []
        ]);
    }

    private function calculateDevProfileCompletion($dev): int
    {
        $fields = [
            $dev->getEmail(),
            $dev->getNom(),
            $dev->getPrenom(),
            $dev->getLocalisation(),
            $dev->getCompetences(),
            $dev->getNiveauExperience(),
            $dev->getAvatar()
        ];

        $filledFields = array_filter($fields, function ($field) {
            if ($field instanceof \Doctrine\Common\Collections\Collection) {
                return !$field->isEmpty();
            }
            return $field !== null && $field !== '';
        });

        return (int) (count($filledFields) / count($fields) * 100);
    }

    #[Route('/profile', name: 'app_dev_profile')]
    public function profile(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        
        if (!$user instanceof \App\Entity\Dev) {
            throw new AccessDeniedException('Accès réservé aux développeurs.');
        }

        $form = $this->createForm(DevProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Votre profil a été mis à jour avec succès !');
            
            return $this->redirectToRoute('dev_dashboard');
        }

        return $this->render('dev/profile.html.twig', [
            'dev' => $user,
            'form' => $form->createView(),
            'completionPercentage' => $this->calculateDevProfileCompletion($user)
        ]);
    }

    #[Route('/fiche-poste/{id}', name: 'fiche_poste_show')]
    public function showFichePoste(FicheDePoste $ficheDePoste, EntityManagerInterface $entityManager): Response
    {
        // Incrémenter le compteur de vues
        $ficheDePoste->incrementViewCount();
        $entityManager->flush();

        return $this->render('dev/fiche_poste/show.html.twig', [
            'ficheDePoste' => $ficheDePoste,
            'dev' => $this->getUser(),
        ]);
    }

    #[Route('search', name: 'app_dev_search')]
    public function search(Request $request, FicheDePosteRepository $ficheDePosteRepository, CompetenceRepository $competenceRepository): Response
    {
        /** @var \App\Entity\Dev $dev */
        $dev = $this->getUser();

        // Récupérer toutes les compétences pour le formulaire de recherche
        $competences = $competenceRepository->findAll();

        // Récupérer les paramètres de recherche
        $searchParams = $request->query->all();
        $fiches = [];

        if (!empty($searchParams)) {
            $fiches = $ficheDePosteRepository->searchFiches(
                isset($searchParams['competences']) ? explode(',', $searchParams['competences']) : null,
                $searchParams['localisation'] ?? null,
                isset($searchParams['salaireMin']) ? (int)$searchParams['salaireMin'] : null,
                isset($searchParams['salaireMax']) ? (int)$searchParams['salaireMax'] : null,
                isset($searchParams['niveauExperience']) ? (int)$searchParams['niveauExperience'] : null
            );

            // Calculer les scores de correspondance pour chaque fiche
            foreach ($fiches as $fiche) {
                $fiche->calculateMatchScore($dev);
            }
        }

        return $this->render('dev/search.html.twig', [
            'fiches' => $fiches,
            'competences' => $competences,
            'searchParams' => $searchParams
        ]);
    }
}
