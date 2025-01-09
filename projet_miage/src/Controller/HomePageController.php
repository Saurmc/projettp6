<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/choix-connexion', name: 'app_choix_connexion')]
    public function choixConnexion(): Response
    {
        return $this->render('choix_connexion.html.twig');
    }

    #[Route('/choix-inscription', name: 'app_choix_inscription')]
    public function choixInscription(): Response
    {
        return $this->render('choix_inscription.html.twig');
    }
}
