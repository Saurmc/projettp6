<?php

namespace App\Controller;

use App\Repository\FicheDePosteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/dev')]
#[IsGranted('ROLE_DEV')]
class DevDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dev_dashboard')]
    public function index(FicheDePosteRepository $ficheDePosteRepository): Response
    {
        /** @var \App\Entity\Dev $dev */
        $dev = $this->getUser();
        
        // Récupérer les fiches de poste qui correspondent aux compétences du développeur
        $fichesDePoste = $ficheDePosteRepository->findMatchingFichesForDev($dev);
        
        // Calculer le pourcentage de complétion du profil
        $completionPercentage = $this->calculateDevProfileCompletion($dev);

        return $this->render('dev/dashboard.html.twig', [
            'dev' => $dev,
            'fichesDePoste' => $fichesDePoste,
            'completionPercentage' => $completionPercentage
        ]);
    }

    private function calculateDevProfileCompletion($dev): int
    {
        $fields = [
            $dev->getEmail(),
            $dev->getNom(),
            $dev->getPrenom(),
            $dev->getLocalisation(),
            $dev->getCompetences(),
            $dev->getNiveauExperience(),
            $dev->getAvatar()
        ];

        $filledFields = array_filter($fields, function ($field) {
            if ($field instanceof \Doctrine\Common\Collections\Collection) {
                return !$field->isEmpty();
            }
            return $field !== null && $field !== '';
        });

        return (int) (count($filledFields) / count($fields) * 100);
    }

    #[Route('/profile', name: 'dev_profile')]
    public function profile(): Response
    {
        /** @var \App\Entity\Dev $dev */
        $dev = $this->getUser();
        
        return $this->render('dev/profile.html.twig', [
            'dev' => $dev,
            'completionPercentage' => $this->calculateDevProfileCompletion($dev)
        ]);
    }
}
