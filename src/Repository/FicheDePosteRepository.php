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

    /**
     * Trouve les dernières fiches de poste publiées
     * @return FicheDePoste[] Returns an array of FicheDePoste objects
     */
    public function findLatestFiches(int $limit = 3): array
    {
        return $this->createQueryBuilder('f')
            ->orderBy('f.dateCreation', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les fiches de poste les plus populaires
     * @return FicheDePoste[] Returns an array of FicheDePoste objects
     */
    public function findMostPopularFiches(int $limit = 5): array
    {
        return $this->createQueryBuilder('f')
            ->orderBy('f.viewCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findMatchingFichesForDevWithScore($dev, $limit = 5): array
    {
        $qb = $this->createQueryBuilder('f')
            ->leftJoin('f.competences', 'c')
            ->leftJoin('f.entreprise', 'e')
            ->where('f.salaire >= :salaireMin')
            ->andWhere('f.niveauExperience <= :experience')
            ->setParameter('salaireMin', $dev->getSalaireMinimum())
            ->setParameter('experience', $dev->getNiveauExperience())
            ->orderBy('f.dateCreation', 'DESC')
            ->setMaxResults($limit);

        // Récupérer les compétences du développeur
        $devCompetences = $dev->getCompetences();
        if (!$devCompetences->isEmpty()) {
            $competenceIds = array_map(function($competence) {
                return $competence->getId();
            }, $devCompetences->toArray());
            
            $qb->andWhere('c.id IN (:competences)')
               ->setParameter('competences', $competenceIds);
        }

        $results = $qb->getQuery()->getResult();

        // Calculer le score de matching pour chaque fiche
        foreach ($results as $fiche) {
            $matchScore = $this->calculateMatchScore($fiche, $dev);
            $fiche->matchScore = $matchScore;
        }

        // Trier par score de matching
        usort($results, function($a, $b) {
            return $b->matchScore - $a->matchScore;
        });

        return $results;
    }

    private function calculateMatchScore($fiche, $dev): int
    {
        $score = 0;
        $totalPoints = 0;

        // Points pour le salaire (30%)
        $totalPoints += 30;
        if ($fiche->getSalaire() >= $dev->getSalaireMinimum()) {
            $score += 30;
        }

        // Points pour l'expérience (20%)
        $totalPoints += 20;
        if ($fiche->getNiveauExperience() <= $dev->getNiveauExperience()) {
            $score += 20;
        }

        // Points pour les compétences (50%)
        $totalPoints += 50;
        $ficheCompetences = $fiche->getCompetences();
        $devCompetences = $dev->getCompetences();
        
        if (!$devCompetences->isEmpty() && !$ficheCompetences->isEmpty()) {
            $matchingCompetences = 0;
            foreach ($devCompetences as $devComp) {
                foreach ($ficheCompetences as $ficheComp) {
                    if ($devComp->getId() === $ficheComp->getId()) {
                        $matchingCompetences++;
                    }
                }
            }
            
            $competenceScore = ($matchingCompetences / count($ficheCompetences->toArray())) * 50;
            $score += round($competenceScore);
        }

        return $totalPoints > 0 ? round(($score / $totalPoints) * 100) : 0;
    }

    /**
     * Recherche avancée de fiches de poste
     */
    public function searchFiches(?array $competences = null, ?string $localisation = null, ?int $salaireMin = null, ?int $salaireMax = null, ?int $niveauExperience = null): array
    {
        $qb = $this->createQueryBuilder('f')
            ->select('f', 'c', 'e')
            ->leftJoin('f.competences', 'c')
            ->leftJoin('f.entreprise', 'e')
            ->orderBy('f.dateCreation', 'DESC');

        if ($competences && !empty($competences)) {
            $qb->andWhere(':competences MEMBER OF f.competences')
               ->setParameter('competences', $competences);
        }

        if ($localisation) {
            $qb->andWhere('f.localisation LIKE :localisation')
               ->setParameter('localisation', '%' . $localisation . '%');
        }

        if ($salaireMin) {
            $qb->andWhere('f.salaire >= :salaireMin')
               ->setParameter('salaireMin', $salaireMin);
        }

        if ($salaireMax) {
            $qb->andWhere('f.salaire <= :salaireMax')
               ->setParameter('salaireMax', $salaireMax);
        }

        if ($niveauExperience) {
            $qb->andWhere('f.niveauExperience = :niveauExperience')
               ->setParameter('niveauExperience', $niveauExperience);
        }

        return $qb->getQuery()->getResult();
    }
}
