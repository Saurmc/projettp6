<?php

namespace App\Repository;

use App\Entity\Candidature;
use App\Entity\Entreprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Candidature>
 */
class CandidatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidature::class);
    }

    /**
     * @return Candidature[] Returns an array of Candidature objects
     */
    public function findByEntreprise(Entreprise $entreprise): array
    {
        return $this->createQueryBuilder('c')
            ->join('c.ficheDePoste', 'f')
            ->where('f.entreprise = :entreprise')
            ->setParameter('entreprise', $entreprise)
            ->orderBy('c.datePostulation', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
