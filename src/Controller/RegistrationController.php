<?php

namespace App\Controller;

use App\Entity\Dev;
use App\Entity\Entreprise;
use App\Form\DevRegistrationFormType;
use App\Form\EntrepriseRegistrationFormType;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register/dev', name: 'register_dev')]
    public function registerDev(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $dev = new Dev();
        $form = $this->createForm(DevRegistrationFormType::class, $dev);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $dev->setPassword(
                $userPasswordHasher->hashPassword(
                    $dev,
                    $form->get('plainPassword')->getData()
                )
            );

            try {
                $entityManager->persist($dev);
                $entityManager->flush();

                $this->addFlash('success', 'Votre compte développeur a été créé avec succès !');
                return $this->redirectToRoute('app_home');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Cette adresse email est déjà utilisée. Veuillez vous connecter ou utiliser une autre adresse.');
                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('registration/register_dev.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/register/company', name: 'register_company')]
    public function registerCompany(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $entreprise = new Entreprise();
        $form = $this->createForm(EntrepriseRegistrationFormType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $entreprise->setPassword(
                $userPasswordHasher->hashPassword(
                    $entreprise,
                    $form->get('plainPassword')->getData()
                )
            );

            try {
                $entityManager->persist($entreprise);
                $entityManager->flush();

                $this->addFlash('success', 'Votre compte entreprise a été créé avec succès !');
                return $this->redirectToRoute('app_home');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Cette adresse email est déjà utilisée. Veuillez vous connecter ou utiliser une autre adresse.');
                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('registration/register_company.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
