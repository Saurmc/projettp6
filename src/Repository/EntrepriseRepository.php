<?php

namespace App\Repository;

use App\Entity\Entreprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Entreprise>
 *
 * @method Entreprise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entreprise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entreprise[]    findAll()
 * @method Entreprise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntrepriseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entreprise::class);
    }

    /**
     * @return Entreprise[] Returns an array of Entreprise objects matching the criteria
     */
    public function findByTechnologiesAndExperience(array $technologies, int $experience): array
    {
        $qb = $this->createQueryBuilder('e')
            ->where('e.technologiesRecherchees LIKE :tech')
            ->andWhere('e.niveauExperienceRequis <= :exp')
            ->setParameter('tech', '%' . json_encode($technologies) . '%')
            ->setParameter('exp', $experience)
            ->orderBy('e.salairePropose', 'DESC');

        return $qb->getQuery()->getResult();
    }

    public function findBySalaryRange(float $minSalary, float $maxSalary): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.salairePropose BETWEEN :min AND :max')
            ->setParameter('min', $minSalary)
            ->setParameter('max', $maxSalary)
            ->orderBy('e.salairePropose', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
