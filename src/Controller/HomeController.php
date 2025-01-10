<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Si l'utilisateur est connecté, le rediriger vers son dashboard
        if ($this->getUser()) {
            if ($this->isGranted('ROLE_DEV')) {
                return $this->redirectToRoute('dev_dashboard');
            } elseif ($this->isGranted('ROLE_ENTREPRISE')) {
                return $this->redirectToRoute('entreprise_dashboard');
            }
        }

        return $this->render('home/index.html.twig');
    }

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, le rediriger vers son dashboard
        if ($this->getUser()) {
            if ($this->isGranted('ROLE_DEV')) {
                return $this->redirectToRoute('dev_dashboard');
            } elseif ($this->isGranted('ROLE_ENTREPRISE')) {
                return $this->redirectToRoute('entreprise_dashboard');
            }
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Le logout est géré par Symfony Security
    }

    #[Route('/about', name: 'about_us')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }
}
