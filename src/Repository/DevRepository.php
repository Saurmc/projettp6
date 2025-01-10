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
}