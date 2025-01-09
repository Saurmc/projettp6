<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Developpeur;

use App\Form\RegistrationFormType;
use App\Security\AuthentificationAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, SessionInterface $session,  EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();

            // encode the plain password
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));

            $entityManager->persist($user);
            $entityManager->flush();
            $security->login($user, AuthentificationAuthenticator::class, 'main');
            // do anything else you need here, like send an email
            $session->set('user_id', $user->getId());

            return $this->redirectToRoute('app_choixinscription_page', [], Response::HTTP_SEE_OTHER);

            
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
            'userId' => $user->getId(), // Passe l'ID à la vue Twig

        ]);
    }
}
