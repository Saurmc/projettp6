<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Entity\FichePoste;
use App\Form\FichePosteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/entreprise')]
class EntrepriseController extends AbstractController
{
    #[Route('/', name: 'app_entreprise_home')]
    public function index(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'entreprise est connectée
        if (!$session->get('entreprise_is_logged_in')) {
            return $this->redirectToRoute('app_connexion_entreprise');
        }

        // Récupérer l'entreprise
        $entreprise = $entityManager->getRepository(Entreprise::class)->find($session->get('entreprise_id'));
        if (!$entreprise) {
            $session->remove('entreprise_is_logged_in');
            $session->remove('entreprise_id');
            return $this->redirectToRoute('app_connexion_entreprise');
        }

        // Récupérer les fiches de poste de l'entreprise
        $fichesPoste = $entityManager->getRepository(FichePoste::class)
            ->findBy(['entreprise' => $entreprise], ['createdAt' => 'DESC']);

        return $this->render('entreprise/index.html.twig', [
            'entreprise' => $entreprise,
            'fiches_poste' => $fichesPoste
        ]);
    }

    #[Route('/nouvelle-fiche', name: 'app_entreprise_new_fiche')]
    public function newFiche(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'entreprise est connectée
        if (!$session->get('entreprise_is_logged_in')) {
            return $this->redirectToRoute('app_connexion_entreprise');
        }

        // Récupérer l'entreprise
        $entreprise = $entityManager->getRepository(Entreprise::class)->find($session->get('entreprise_id'));
        if (!$entreprise) {
            $session->remove('entreprise_is_logged_in');
            $session->remove('entreprise_id');
            return $this->redirectToRoute('app_connexion_entreprise');
        }

        $fichePoste = new FichePoste();
        $fichePoste->setEntreprise($entreprise);
        
        $form = $this->createForm(FichePosteType::class, $fichePoste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($fichePoste);
            $entityManager->flush();

            $this->addFlash('success', 'La fiche de poste a été créée avec succès.');
            return $this->redirectToRoute('app_entreprise_home');
        }

        return $this->render('entreprise/new_fiche.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/profil', name: 'app_entreprise_profile')]
    public function profile(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'entreprise est connectée
        if (!$session->get('entreprise_is_logged_in')) {
            return $this->redirectToRoute('app_connexion_entreprise');
        }

        // Récupérer l'entreprise
        $entreprise = $entityManager->getRepository(Entreprise::class)->find($session->get('entreprise_id'));
        if (!$entreprise) {
            $session->remove('entreprise_is_logged_in');
            $session->remove('entreprise_id');
            return $this->redirectToRoute('app_connexion_entreprise');
        }

        return $this->render('entreprise/profile.html.twig', [
            'entreprise' => $entreprise
        ]);
    }

    #[Route('/deconnexion', name: 'app_entreprise_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->remove('entreprise_is_logged_in');
        $session->remove('entreprise_id');
        
        return $this->redirectToRoute('app_home');
    }
}
