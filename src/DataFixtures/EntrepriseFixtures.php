<?php

namespace App\DataFixtures;

use App\Entity\Entreprise;
use App\Entity\FicheDePoste;
use App\Entity\Competence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class EntrepriseFixtures extends Fixture implements DependentFixtureInterface
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $entreprises = [
            [
                'email' => 'contact@innovtech.fr',
                'nom' => 'InnovTech Solutions',
                'description' => 'Entreprise leader dans le développement de solutions cloud innovantes pour les entreprises.',
                'siteWeb' => 'https://innovtech.fr',
                'adresse' => '15 rue de l\'Innovation, 75002 Paris',
                'fichesDePoste' => [
                    [
                        'titre' => 'Lead Developer Full Stack',
                        'description' => 'Nous recherchons un Lead Developer Full Stack pour diriger notre équipe de développement et participer à la conception de nos solutions cloud.',
                        'localisation' => 'Paris',
                        'salaire' => 55000,
                        'niveauExperience' => 3,
                        'competences' => ['PHP', 'Symfony', 'React', 'Docker', 'AWS']
                    ]
                ]
            ],
            [
                'email' => 'recrutement@datawise.com',
                'nom' => 'DataWise Analytics',
                'description' => 'Spécialiste en solutions d\'analyse de données et intelligence artificielle.',
                'siteWeb' => 'https://datawise.com',
                'adresse' => '25 avenue des Sciences, 69003 Lyon',
                'fichesDePoste' => [
                    [
                        'titre' => 'Développeur Python Senior',
                        'description' => 'Rejoignez notre équipe Data Science pour développer des solutions d\'IA innovantes.',
                        'localisation' => 'Lyon',
                        'salaire' => 48000,
                        'niveauExperience' => 2,
                        'competences' => ['Python', 'Django', 'PostgreSQL', 'MongoDB']
                    ]
                ]
            ],
            [
                'email' => 'jobs@mobileplus.fr',
                'nom' => 'MobilePlus',
                'description' => 'Studio de développement mobile spécialisé dans les applications innovantes.',
                'siteWeb' => 'https://mobileplus.fr',
                'adresse' => '8 rue Mobile, 33000 Bordeaux',
                'fichesDePoste' => [
                    [
                        'titre' => 'Développeur Mobile React Native',
                        'description' => 'Nous recherchons un développeur mobile passionné pour rejoindre notre équipe.',
                        'localisation' => 'Bordeaux',
                        'salaire' => 40000,
                        'niveauExperience' => 1,
                        'competences' => ['React Native', 'TypeScript', 'Jest']
                    ]
                ]
            ],
            [
                'email' => 'contact@webexpert.fr',
                'nom' => 'WebExpert',
                'description' => 'Agence web full-service spécialisée dans le développement d\'applications web sur mesure.',
                'siteWeb' => 'https://webexpert.fr',
                'adresse' => '42 rue du Web, 31000 Toulouse',
                'fichesDePoste' => [
                    [
                        'titre' => 'Développeur Frontend Vue.js',
                        'description' => 'Recherche développeur frontend expérimenté pour projets innovants.',
                        'localisation' => 'Toulouse',
                        'salaire' => 42000,
                        'niveauExperience' => 2,
                        'competences' => ['Vue.js', 'TypeScript', 'Jest', 'Cypress']
                    ]
                ]
            ]
        ];

        $competencesRepo = $manager->getRepository(Competence::class);

        foreach ($entreprises as $entrepriseData) {
            $entreprise = new Entreprise();
            $entreprise->setEmail($entrepriseData['email'])
                      ->setPassword($this->passwordHasher->hashPassword($entreprise, 'password123'))
                      ->setNom($entrepriseData['nom'])
                      ->setDescription($entrepriseData['description'])
                      ->setSiteWeb($entrepriseData['siteWeb'])
                      ->setAdresse($entrepriseData['adresse']);

            $manager->persist($entreprise);

            // Création des fiches de poste
            foreach ($entrepriseData['fichesDePoste'] as $ficheData) {
                $fiche = new FicheDePoste();
                $fiche->setTitre($ficheData['titre'])
                      ->setDescription($ficheData['description'])
                      ->setLocalisation($ficheData['localisation'])
                      ->setSalaire($ficheData['salaire'])
                      ->setNiveauExperience($ficheData['niveauExperience'])
                      ->setEntreprise($entreprise);

                // Ajout des compétences requises
                foreach ($ficheData['competences'] as $competenceName) {
                    $competence = $competencesRepo->findOneBy(['nom' => $competenceName]);
                    if ($competence) {
                        $fiche->addCompetence($competence);
                    }
                }

                $manager->persist($fiche);
            }
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
