<?php

namespace App\Controller;

use App\Entity\Developpeur;
use App\Entity\User;
use App\Form\InscriptionDevType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class InscriptionDevController extends AbstractController
{
    #[Route('/inscription/dev', name: 'app_inscription_dev')]
    public function index(
        Request $request, 
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $dev = new Developpeur();
        $user = new User();
        $form = $this->createForm(InscriptionDevType::class, ['developpeur' => $dev, 'user' => $user]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash du mot de passe
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $form->get('user')->get('password')->getData()
            );
            $user->setPassword($hashedPassword);
            $user->setRoles(['ROLE_DEV']);

            // Liaison entre User et Developpeur
            $dev->setUser($user);
            
            // Gestion de l'avatar si uploadé
            $avatarFile = $form->get('developpeur')->get('avatarFile')->getData();
            if ($avatarFile) {
                $newFilename = uniqid().'.'.$avatarFile->guessExtension();
                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'),
                        $newFilename
                    );
                    $dev->setAvatar($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'avatar');
                }
            }

            $entityManager->persist($user);
            $entityManager->persist($dev);
            $entityManager->flush();

            return $this->redirectToRoute('app_connexion_dev');
        }

        return $this->render('inscription/dev.html.twig', [
            'form' => $form
        ]);
    }
}
