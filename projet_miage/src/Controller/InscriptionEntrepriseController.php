<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Form\InscriptionEntrepriseType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class InscriptionEntrepriseController extends AbstractController
{
    #[Route('/inscription/entreprise', name: 'app_inscription_entreprise')]
    public function index(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $entreprise = new Entreprise();
        $form = $this->createForm(InscriptionEntrepriseType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // L'entité Entreprise va gérer automatiquement createdAt via #[ORM\PrePersist]
            $entityManager->persist($entreprise);
            $entityManager->flush();

            $session->set('entreprise_id', $entreprise->getId());
            $session->set('entreprise_is_logged_in', true);
            
            return $this->redirectToRoute('app_entreprise_home');
        }

        return $this->render('inscription/entreprise.html.twig', [
            'form' => $form
        ]);
    }
}
