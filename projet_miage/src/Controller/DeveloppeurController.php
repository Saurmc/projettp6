<?php

namespace App\Controller;

use App\Entity\Developpeur;
use App\Entity\FichePoste;
use App\Repository\FichePosteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/developpeur')]
class DeveloppeurController extends AbstractController
{
    #[Route('/', name: 'app_dev_home')]
    public function index(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si le développeur est connecté
        if (!$session->get('dev_is_logged_in')) {
            return $this->redirectToRoute('app_connexion_dev');
        }

        // Récupérer le développeur
        $dev = $entityManager->getRepository(Developpeur::class)->find($session->get('dev_id'));
        if (!$dev) {
            $session->remove('dev_is_logged_in');
            $session->remove('dev_id');
            return $this->redirectToRoute('app_connexion_dev');
        }

        // Récupérer les fiches de poste correspondant au profil du développeur
        $fichesPoste = $entityManager->getRepository(FichePoste::class)
            ->createQueryBuilder('f')
            ->where('f.langage = :langage')
            ->andWhere('f.experience = :experience')
            ->setParameter('langage', $dev->getLangage())
            ->setParameter('experience', $dev->getExperience())
            ->orderBy('f.createdAt', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();

        return $this->render('developpeur/index.html.twig', [
            'developpeur' => $dev,
            'fiches_poste' => $fichesPoste
        ]);
    }

    #[Route('/profil', name: 'app_dev_profile')]
    public function profile(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si le développeur est connecté
        if (!$session->get('dev_is_logged_in')) {
            return $this->redirectToRoute('app_connexion_dev');
        }

        // Récupérer le développeur
        $dev = $entityManager->getRepository(Developpeur::class)->find($session->get('dev_id'));
        if (!$dev) {
            $session->remove('dev_is_logged_in');
            $session->remove('dev_id');
            return $this->redirectToRoute('app_connexion_dev');
        }

        return $this->render('developpeur/profile.html.twig', [
            'developpeur' => $dev
        ]);
    }

    #[Route('/deconnexion', name: 'app_dev_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->remove('dev_is_logged_in');
        $session->remove('dev_id');
        
        return $this->redirectToRoute('app_home');
    }

    #[Route('/fiches', name: 'app_developpeur_fiches')]
    public function listeFiches(FichePosteRepository $fichePosteRepository): Response
    {
        $fiches = $fichePosteRepository->findBy([], ['createdAt' => 'DESC']);
        
        return $this->render('developpeur/fiches.html.twig', [
            'fiches' => $fiches
        ]);
    }

    #[Route('/fiche/{id}', name: 'app_developpeur_fiche_detail')]
    public function fichesDetail(int $id, FichePosteRepository $fichePosteRepository): Response
    {
        $fiche = $fichePosteRepository->find($id);
        if (!$fiche) {
            throw $this->createNotFoundException('Fiche de poste non trouvée');
        }

        return $this->render('developpeur/fiche_detail.html.twig', [
            'fiche' => $fiche
        ]);
    }
}
