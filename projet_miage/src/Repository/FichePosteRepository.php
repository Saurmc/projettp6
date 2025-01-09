<?php

namespace App\Repository;

use App\Entity\FichePoste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FichePoste>
 *
 * @method FichePoste|null find($id, $lockMode = null, $lockVersion = null)
 * @method FichePoste|null findOneBy(array $criteria, array $orderBy = null)
 * @method FichePoste[]    findAll()
 * @method FichePoste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichePosteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FichePoste::class);
    }
}
