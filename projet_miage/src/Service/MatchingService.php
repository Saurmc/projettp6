<?php

namespace App\Service;

use App\Entity\Developpeur;
use App\Entity\FichePoste;
use App\Repository\DeveloppeurRepository;
use App\Repository\FichePosteRepository;
use Doctrine\ORM\EntityManagerInterface;

class MatchingService
{
    public function __construct(
        private readonly DeveloppeurRepository $developpeurRepository,
        private readonly FichePosteRepository $fichePosteRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    /**
     * Trouve les développeurs correspondant aux critères de la fiche de poste
     */
    public function findMatchingDevelopers(FichePoste $fichePoste): array
    {
        $qb = $this->developpeurRepository->createQueryBuilder('d')
            ->where('d.langage = :langage')
            ->andWhere('d.experience = :experience')
            ->andWhere('d.salaire <= :salaire')
            ->setParameter('langage', $fichePoste->getTechnologie())
            ->setParameter('experience', $fichePoste->getExperience())
            ->setParameter('salaire', $fichePoste->getSalaire())
            ->orderBy('d.viewCount', 'DESC')
            ->setMaxResults(10);

        // Ajout optionnel du critère de localisation
        if ($fichePoste->getLocalisation()) {
            $qb->andWhere('d.localisation = :localisation')
                ->setParameter('localisation', $fichePoste->getLocalisation());
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les fiches de poste correspondant aux critères du développeur
     */
    public function findMatchingJobs(Developpeur $developpeur): array
    {
        $qb = $this->fichePosteRepository->createQueryBuilder('f')
            ->where('f.technologie = :langage')
            ->andWhere('f.experience = :experience')
            ->andWhere('f.salaire >= :salaire')
            ->setParameter('langage', $developpeur->getLangage())
            ->setParameter('experience', $developpeur->getExperience())
            ->setParameter('salaire', $developpeur->getSalaire())
            ->orderBy('f.viewCount', 'DESC')
            ->setMaxResults(10);

        // Ajout optionnel du critère de localisation
        if ($developpeur->getLocalisation()) {
            $qb->andWhere('f.localisation = :localisation')
                ->setParameter('localisation', $developpeur->getLocalisation());
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les profils de développeurs les plus consultés
     */
    public function getMostViewedDevelopers(int $limit = 5): array
    {
        return $this->developpeurRepository->createQueryBuilder('d')
            ->orderBy('d.viewCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les derniers profils de développeurs créés
     */
    public function getLatestDevelopers(int $limit = 3): array
    {
        return $this->developpeurRepository->createQueryBuilder('d')
            ->orderBy('d.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les fiches de poste les plus consultées
     */
    public function getMostViewedJobs(int $limit = 5): array
    {
        return $this->fichePosteRepository->createQueryBuilder('f')
            ->orderBy('f.viewCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les dernières fiches de poste publiées
     */
    public function getLatestJobs(int $limit = 3): array
    {
        return $this->fichePosteRepository->createQueryBuilder('f')
            ->orderBy('f.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Incrémente le compteur de vues d'un développeur
     */
    public function incrementDeveloperViews(Developpeur $developpeur): void
    {
        $developpeur->incrementViewCount();
        $this->entityManager->flush();
    }

    /**
     * Incrémente le compteur de vues d'une fiche de poste
     */
    public function incrementJobViews(FichePoste $fichePoste): void
    {
        $fichePoste->incrementViewCount();
        $this->entityManager->flush();
    }
}
