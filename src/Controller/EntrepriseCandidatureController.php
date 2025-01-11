<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Entreprise;
use App\Repository\CandidatureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ENTREPRISE')]
class EntrepriseCandidatureController extends AbstractController
{
    #[Route('/entreprise/candidatures', name: 'app_entreprise_candidatures')]
    public function index(CandidatureRepository $candidatureRepository): Response
    {
        /** @var Entreprise $entreprise */
        $entreprise = $this->getUser();
        
        // Récupérer toutes les candidatures pour les offres de l'entreprise
        $candidatures = $candidatureRepository->findByEntreprise($entreprise);
        
        // Grouper les candidatures par fiche de poste
        $candidaturesParOffre = [];
        foreach ($candidatures as $candidature) {
            $ficheId = $candidature->getFicheDePoste()->getId();
            if (!isset($candidaturesParOffre[$ficheId])) {
                $candidaturesParOffre[$ficheId] = [
                    'fiche' => $candidature->getFicheDePoste(),
                    'candidatures' => []
                ];
            }
            $candidaturesParOffre[$ficheId]['candidatures'][] = $candidature;
        }

        return $this->render('entreprise/candidatures.html.twig', [
            'candidaturesParOffre' => $candidaturesParOffre,
        ]);
    }

    #[Route('/entreprise/candidature/{id}/statut/{statut}', name: 'app_entreprise_candidature_statut')]
    public function changerStatut(
        Candidature $candidature, 
        string $statut, 
        EntityManagerInterface $entityManager
    ): Response {
        /** @var Entreprise $entreprise */
        $entreprise = $this->getUser();

        // Vérifier que la candidature appartient bien à une offre de cette entreprise
        if ($candidature->getFicheDePoste()->getEntreprise() !== $entreprise) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette candidature.');
        }

        // Vérifier que le statut est valide
        if (!in_array($statut, ['acceptee', 'refusee'])) {
            throw $this->createNotFoundException('Statut invalide.');
        }

        $candidature->setStatut($statut);
        $entityManager->flush();

        $this->addFlash('success', 'Le statut de la candidature a été mis à jour.');

        return $this->redirectToRoute('app_entreprise_candidatures');
    }
}
