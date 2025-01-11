<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Entity\FicheDePoste;
use App\Form\EntrepriseProfileType;
use App\Form\FicheDePosteType;
use App\Repository\DevRepository;
use App\Repository\FicheDePosteRepository;
use App\Repository\CandidatureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/entreprise')]
#[IsGranted('ROLE_ENTREPRISE')]
class EntrepriseDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'entreprise_dashboard')]
    public function index(FicheDePosteRepository $ficheDePosteRepository, DevRepository $devRepository, CandidatureRepository $candidatureRepository): Response
    {
        /** @var \App\Entity\Entreprise $entreprise */
        $entreprise = $this->getUser();
        
        // Récupérer les fiches de poste de l'entreprise
        $fichesDePoste = $ficheDePosteRepository->findBy(['entreprise' => $entreprise], ['dateCreation' => 'DESC']);
        
        // Récupérer les développeurs les plus consultés
        $topDevs = $devRepository->findMostViewedDevs(5);
        
        // Récupérer les 3 derniers profils de développeurs créés
        $latestDevs = $devRepository->findLatestDevs(3);

        // Récupérer toutes les candidatures pour l'entreprise
        $candidatures = $candidatureRepository->findByEntreprise($entreprise);

        return $this->render('entreprise/dashboard.html.twig', [
            'entreprise' => $entreprise,
            'fichesDePoste' => $fichesDePoste,
            'topDevs' => $topDevs,
            'latestDevs' => $latestDevs,
            'candidatures' => $candidatures,
        ]);
    }

    #[Route('/profile', name: 'entreprise_profile')]
    public function profile(): Response
    {
        /** @var Entreprise $entreprise */
        $entreprise = $this->getUser();
        
        return $this->render('entreprise/profile.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }

    #[Route('/profile/edit', name: 'entreprise_profile_edit', methods: ['GET', 'POST'])]
    public function editProfile(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var Entreprise $entreprise */
        $entreprise = $this->getUser();
        $form = $this->createForm(EntrepriseProfileType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle logo upload if present
            $logoFile = $form->get('logo')->getData();
            if ($logoFile) {
                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$logoFile->guessExtension();

                try {
                    $logoFile->move(
                        $this->getParameter('logos_directory'),
                        $newFilename
                    );
                    // Update the logo path in the entity
                    $entreprise->setLogo($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement du logo');
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Votre profil a été mis à jour avec succès.');

            return $this->redirectToRoute('entreprise_profile');
        }

        return $this->render('entreprise/edit_profile.html.twig', [
            'form' => $form->createView(),
            'entreprise' => $entreprise
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

    #[Route('/fiche-poste/{id}/delete', name: 'entreprise_fiche_poste_delete', methods: ['POST'])]
    public function deleteFichePoste(FicheDePoste $ficheDePoste, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'entreprise est propriétaire de la fiche
        if ($ficheDePoste->getEntreprise() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        // Récupérer l'entreprise et la typer correctement
        /** @var Entreprise $entreprise */
        $entreprise = $this->getUser();
        
        // Supprimer la fiche de poste de la collection de l'entreprise
        $entreprise->removeFicheDePoste($ficheDePoste);
        
        // Supprimer la fiche de poste de la base de données
        $entityManager->remove($ficheDePoste);
        $entityManager->flush();

        $this->addFlash('success', 'L\'offre d\'emploi a été supprimée avec succès.');
        return $this->redirectToRoute('entreprise_dashboard');
    }

    #[Route('/about', name: 'entreprise_about')]
    public function about(): Response
    {
        /** @var Entreprise $entreprise */
        $entreprise = $this->getUser();
        
        return $this->render('entreprise/about.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }

    #[Route('/dev/{id}', name: 'dev_profile_show')]
    public function showDevProfile(Dev $dev, EntityManagerInterface $entityManager): Response
    {
        // Incrémenter le compteur de vues
        $dev->incrementViewCount();
        $entityManager->flush();

        return $this->render('entreprise/dev_profile.html.twig', [
            'dev' => $dev,
            'entreprise' => $this->getUser(),
        ]);
    }
}
