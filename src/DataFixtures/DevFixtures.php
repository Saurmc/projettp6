<?php

namespace App\DataFixtures;

use App\Entity\Dev;
use App\Entity\Competence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class DevFixtures extends Fixture implements DependentFixtureInterface
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $devs = [
            [
                'email' => 'sarah.dupont@dev.com',
                'nom' => 'Dupont',
                'prenom' => 'Sarah',
                'localisation' => 'Paris',
                'niveauExperience' => 3,
                'salaireMinimum' => 45000,
                'biographie' => 'Développeuse Full Stack avec 5 ans d\'expérience en développement web. Passionnée par l\'architecture logicielle et les bonnes pratiques de développement.',
                'competences' => ['PHP', 'Symfony', 'React', 'MySQL', 'Docker']
            ],
            [
                'email' => 'alexandre.martin@dev.com',
                'nom' => 'Martin',
                'prenom' => 'Alexandre',
                'localisation' => 'Lyon',
                'niveauExperience' => 2,
                'salaireMinimum' => 38000,
                'biographie' => 'Développeur Backend spécialisé Java/Spring. Amateur de Clean Code et d\'architecture hexagonale.',
                'competences' => ['Java', 'Spring Boot', 'PostgreSQL', 'JUnit', 'Git']
            ],
            [
                'email' => 'marie.leroy@dev.com',
                'nom' => 'Leroy',
                'prenom' => 'Marie',
                'localisation' => 'Bordeaux',
                'niveauExperience' => 1,
                'salaireMinimum' => 32000,
                'biographie' => 'Développeuse Frontend passionnée par l\'UX/UI. Expertise en JavaScript moderne et frameworks frontend.',
                'competences' => ['JavaScript', 'Vue.js', 'TypeScript', 'Jest', 'Cypress']
            ],
            [
                'email' => 'thomas.bernard@dev.com',
                'nom' => 'Bernard',
                'prenom' => 'Thomas',
                'localisation' => 'Toulouse',
                'niveauExperience' => 3,
                'salaireMinimum' => 50000,
                'biographie' => 'DevOps Engineer avec forte expertise en Cloud et CI/CD. Certifié AWS et Azure.',
                'competences' => ['Docker', 'Kubernetes', 'AWS', 'Terraform', 'GitLab CI']
            ],
            [
                'email' => 'emma.petit@dev.com',
                'nom' => 'Petit',
                'prenom' => 'Emma',
                'localisation' => 'Nantes',
                'niveauExperience' => 2,
                'salaireMinimum' => 40000,
                'biographie' => 'Développeuse mobile full-stack. Expérience en développement d\'applications natives et cross-platform.',
                'competences' => ['React Native', 'Flutter', 'TypeScript', 'MongoDB', 'Express.js']
            ]
        ];

        $competencesRepo = $manager->getRepository(Competence::class);

        foreach ($devs as $devData) {
            $dev = new Dev();
            $dev->setEmail($devData['email'])
                ->setPassword($this->passwordHasher->hashPassword($dev, 'password123'))
                ->setNom($devData['nom'])
                ->setPrenom($devData['prenom'])
                ->setLocalisation($devData['localisation'])
                ->setNiveauExperience($devData['niveauExperience'])
                ->setSalaireMinimum($devData['salaireMinimum'])
                ->setBiographie($devData['biographie']);

            // Ajout des compétences
            foreach ($devData['competences'] as $competenceName) {
                $competence = $competencesRepo->findOneBy(['nom' => $competenceName]);
                if ($competence) {
                    $dev->addCompetence($competence);
                }
            }

            $manager->persist($dev);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            CompetenceFixtures::class,
        ];
    }
}
