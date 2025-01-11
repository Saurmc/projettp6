<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Dev;
use App\Entity\FicheDePoste;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_DEV')]
class DevCandidatureController extends AbstractController
{
    #[Route('/dev/candidatures', name: 'app_dev_candidatures')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        /** @var Dev $dev */
        $dev = $this->getUser();
        $candidatures = $dev->getCandidatures();

        return $this->render('dev/candidatures.html.twig', [
            'candidatures' => $candidatures,
        ]);
    }

    #[Route('/dev/candidature/postuler/{id}', name: 'app_dev_postuler')]
    public function postuler(FicheDePoste $ficheDePoste, EntityManagerInterface $entityManager): Response
    {
        /** @var Dev $dev */
        $dev = $this->getUser();

        // Vérifier si le développeur n'a pas déjà postulé
        foreach ($dev->getCandidatures() as $candidature) {
            if ($candidature->getFicheDePoste() === $ficheDePoste) {
                $this->addFlash('warning', 'Vous avez déjà postulé à cette offre.');
                return $this->redirectToRoute('app_dev_candidatures');
            }
        }

        $candidature = new Candidature();
        $candidature->setDev($dev);
        $candidature->setFicheDePoste($ficheDePoste);

        $entityManager->persist($candidature);
        $entityManager->flush();

        $this->addFlash('success', 'Votre candidature a été enregistrée avec succès.');

        return $this->redirectToRoute('app_dev_candidatures');
    }
}
