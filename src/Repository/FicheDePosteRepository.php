<?php

namespace App\Repository;

use App\Entity\Dev;
use App\Entity\FicheDePoste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FicheDePoste>
 *
 * @method FicheDePoste|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheDePoste|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheDePoste[]    findAll()
 * @method FicheDePoste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheDePosteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FicheDePoste::class);
    }

    /**
     * @return FicheDePoste[] Returns an array of FicheDePoste objects matching the criteria
     */
    public function findByEntreprise($entreprise): array
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.entreprise = :entreprise')
            ->setParameter('entreprise', $entreprise)
            ->orderBy('f.titre', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les fiches de poste qui correspondent aux compétences du développeur
     */
    public function findMatchingFichesForDev(Dev $dev): array
    {
        $qb = $this->createQueryBuilder('f')
            ->select('f', 'c')
            ->leftJoin('f.competences', 'c')
            ->orderBy('f.dateCreation', 'DESC');

        // Si le développeur a des compétences, on filtre les fiches qui ont au moins une compétence en commun
        if (!$dev->getCompetences()->isEmpty()) {
            $qb->andWhere(':competences MEMBER OF f.competences')
               ->setParameter('competences', $dev->getCompetences()->toArray());
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les fiches de poste avec leurs compétences
     */
    public function findAllWithCompetences(): array
    {
        return $this->createQueryBuilder('f')
            ->select('f', 'c')
            ->leftJoin('f.competences', 'c')
            ->orderBy('f.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
