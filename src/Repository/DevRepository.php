<?php

namespace App\Repository;

use App\Entity\Dev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dev>
 *
 * @method Dev|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dev|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dev[]    findAll()
 * @method Dev[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DevRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dev::class);
    }

    /**
     * @return Dev[] Returns an array of Dev objects with their competences
     */
    public function findAllWithCompetences(): array
    {
        return $this->createQueryBuilder('d')
            ->select('d', 'c')
            ->leftJoin('d.competences', 'c')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les 3 derniers profils de développeurs créés
     * @return Dev[] Returns an array of Dev objects
     */
    public function findLatestDevs(int $limit = 3): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les profils de développeurs les plus consultés
     * @return Dev[] Returns an array of Dev objects
     */
    public function findMostViewedDevs(int $limit = 5): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.viewCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche avancée de développeurs
     */
    public function searchDevs(?array $competences = null, ?string $localisation = null, ?int $experienceMin = null): array
    {
        $qb = $this->createQueryBuilder('d')
            ->select('d', 'c')
            ->leftJoin('d.competences', 'c')
            ->orderBy('d.id', 'DESC');

        if ($competences && !empty($competences)) {
            $qb->andWhere(':competences MEMBER OF d.competences')
               ->setParameter('competences', $competences);
        }

        if ($localisation) {
            $qb->andWhere('d.localisation LIKE :localisation')
               ->setParameter('localisation', '%' . $localisation . '%');
        }

        if ($experienceMin !== null) {
            $qb->andWhere('d.niveauExperience >= :experienceMin')
               ->setParameter('experienceMin', $experienceMin);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les développeurs recommandés pour une entreprise basé sur les compétences requises dans leurs fiches de poste
     * @param Entreprise $entreprise
     * @return Dev[] Returns an array of Dev objects
     */
    public function findRecommendedDevsForEntreprise($entreprise): array
    {
        return $this->createQueryBuilder('d')
            ->select('d', 'c')
            ->leftJoin('d.competences', 'c')
            ->leftJoin('d.candidatures', 'ca')
            ->leftJoin('ca.ficheDePoste', 'f')
            ->leftJoin('f.entreprise', 'e')
            ->andWhere('e.id != :entrepriseId OR ca.id IS NULL')
            ->setParameter('entrepriseId', $entreprise->getId())
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();
    }
}