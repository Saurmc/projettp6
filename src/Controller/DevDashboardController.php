<?php

namespace App\Controller;

use App\Entity\FicheDePoste;
use App\Form\DevProfileType;
use App\Repository\FicheDePosteRepository;
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
    #[Route('/dashboard', name: 'dev_dashboard')]
    public function index(FicheDePosteRepository $ficheDePosteRepository): Response
    {
        /** @var \App\Entity\Dev $dev */
        $dev = $this->getUser();
        
        // Récupérer les offres qui correspondent au profil
        $matchingFiches = $ficheDePosteRepository->findMatchingFichesForDevWithScore($dev, 6);
        
        // Récupérer les fiches de poste les plus populaires
        $topFiches = $ficheDePosteRepository->findMostPopularFiches(6);
        
        // Récupérer les dernières fiches de poste
        $latestFiches = $ficheDePosteRepository->findLatestFiches(6);

        return $this->render('dev/dashboard.html.twig', [
            'dev' => $dev,
            'matchingFiches' => $matchingFiches,
            'topFiches' => $topFiches,
            'latestFiches' => $latestFiches,
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
}
