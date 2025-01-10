<?php

namespace App\Controller;

use App\Entity\FicheDePoste;
use App\Form\FicheDePosteType;
use App\Repository\DevRepository;
use App\Repository\FicheDePosteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/entreprise')]
#[IsGranted('ROLE_ENTREPRISE')]
class EntrepriseDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'entreprise_dashboard')]
    public function index(FicheDePosteRepository $ficheDePosteRepository, DevRepository $devRepository): Response
    {
        $entreprise = $this->getUser();
        $fichesDePoste = $ficheDePosteRepository->findBy(['entreprise' => $entreprise], ['dateCreation' => 'DESC']);
        
        // Récupérer tous les développeurs avec leurs compétences
        $devs = $devRepository->findAllWithCompetences();

        return $this->render('entreprise/dashboard.html.twig', [
            'entreprise' => $entreprise,
            'fichesDePoste' => $fichesDePoste,
            'devs' => $devs,
        ]);
    }

    #[Route('/profile', name: 'entreprise_profile')]
    public function profile(): Response
    {
        /** @var \App\Entity\Entreprise $entreprise */
        $entreprise = $this->getUser();
        
        return $this->render('entreprise/profile.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }

    #[Route('/fiche-poste/new', name: 'fiche_poste_new')]
    public function newFichePoste(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ficheDePoste = new FicheDePoste();
        $ficheDePoste->setEntreprise($this->getUser());
        $ficheDePoste->setDateCreation(new \DateTime());

        $form = $this->createForm(FicheDePosteType::class, $ficheDePoste);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid() && !empty($ficheDePoste->getCompetences()->toArray())) {
                $entityManager->persist($ficheDePoste);
                $entityManager->flush();

                $this->addFlash('success', 'La fiche de poste a été créée avec succès.');
                return $this->redirectToRoute('entreprise_dashboard');
            } else {
                if (empty($ficheDePoste->getCompetences()->toArray())) {
                    $this->addFlash('error', 'Veuillez sélectionner au moins une compétence.');
                }
                // Les erreurs de validation seront automatiquement affichées par le formulaire
            }
        }

        return $this->render('entreprise/fiche_poste/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/fiche-poste/{id}', name: 'fiche_poste_show')]
    public function showFichePoste(FicheDePoste $ficheDePoste): Response
    {
        // Vérifier que l'entreprise connectée est bien propriétaire de la fiche
        if ($ficheDePoste->getEntreprise() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette fiche de poste.');
        }

        return $this->render('entreprise/fiche_poste/show.html.twig', [
            'ficheDePoste' => $ficheDePoste,
            'entreprise' => $this->getUser(),
        ]);
    }

    #[Route('/fiche-poste/{id}/edit', name: 'fiche_poste_edit')]
    public function editFichePoste(Request $request, FicheDePoste $ficheDePoste, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'entreprise connectée est bien propriétaire de la fiche
        if ($ficheDePoste->getEntreprise() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette fiche de poste.');
        }

        $form = $this->createForm(FicheDePosteType::class, $ficheDePoste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'L\'offre d\'emploi a été mise à jour avec succès.');
            return $this->redirectToRoute('entreprise_dashboard');
        }

        return $this->render('entreprise/fiche_poste/edit.html.twig', [
            'form' => $form->createView(),
            'ficheDePoste' => $ficheDePoste,
            'entreprise' => $this->getUser(),
        ]);
    }

    #[Route('/fiche-poste/{id}/delete', name: 'fiche_poste_delete', methods: ['POST'])]
    public function deleteFichePoste(Request $request, FicheDePoste $ficheDePoste, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'entreprise connectée est bien propriétaire de la fiche
        if ($ficheDePoste->getEntreprise() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette fiche de poste.');
        }

        if ($this->isCsrfTokenValid('delete'.$ficheDePoste->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ficheDePoste);
            $entityManager->flush();

            $this->addFlash('success', 'L\'offre d\'emploi a été supprimée avec succès.');
        }

        return $this->redirectToRoute('entreprise_dashboard');
    }

    #[Route('/about', name: 'entreprise_about')]
    public function about(): Response
    {
        /** @var \App\Entity\Entreprise $entreprise */
        $entreprise = $this->getUser();
        
        return $this->render('entreprise/about.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }
}
