<?php

namespace App\Controller;

use App\Entity\Developpeur;
use App\Entity\Entreprise;
use App\Form\ConnexionDevType;
use App\Form\ConnexionEntrepriseType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class ConnexionController extends AbstractController
{
    #[Route('/connexion/dev', name: 'app_connexion_dev')]
    public function connexionDev(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $form = $this->createForm(ConnexionDevType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $dev = $entityManager->getRepository(Developpeur::class)->findOneBy([
                'nom' => $data['nom'],
                'prenom' => $data['prenom']
            ]);

            if ($dev) {
                $session->set('dev_id', $dev->getId());
                $session->set('dev_is_logged_in', true);
                return $this->redirectToRoute('app_dev_home');
            }

            $this->addFlash('error', 'Identifiants invalides');
        }

        return $this->render('connexion/dev.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/connexion/entreprise', name: 'app_connexion_entreprise')]
    public function connexionEntreprise(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $form = $this->createForm(ConnexionEntrepriseType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $entreprise = $entityManager->getRepository(Entreprise::class)->findOneBy([
                'nom_entreprise' => $data['nom_entreprise']
            ]);

            if ($entreprise) {
                $session->set('entreprise_id', $entreprise->getId());
                $session->set('entreprise_is_logged_in', true);
                return $this->redirectToRoute('app_entreprise_home');
            }

            $this->addFlash('error', 'Identifiants invalides');
        }

        return $this->render('connexion/entreprise.html.twig', [
            'form' => $form
        ]);
    }
}
