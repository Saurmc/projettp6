<?php

namespace App\DataFixtures;

use App\Entity\Competence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CompetenceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $competences = [
            'Langages' => [
                'PHP', 'JavaScript', 'Python', 'Java', 'C#', 'Ruby', 'Go', 'Swift', 'Kotlin', 'TypeScript',
                'C++', 'Rust', 'Scala', 'R', 'Dart'
            ],
            'Frameworks Backend' => [
                'Symfony', 'Laravel', 'Django', 'Spring Boot', 'ASP.NET Core', 'Ruby on Rails', 'Express.js',
                'FastAPI', 'NestJS', 'Flask'
            ],
            'Frameworks Frontend' => [
                'React', 'Vue.js', 'Angular', 'Svelte', 'Next.js', 'Nuxt.js', 'Gatsby', 'Ember.js',
                'Alpine.js', 'Solid.js'
            ],
            'Base de données' => [
                'MySQL', 'PostgreSQL', 'MongoDB', 'Redis', 'SQLite', 'Oracle', 'Microsoft SQL Server',
                'Cassandra', 'ElasticSearch', 'Neo4j'
            ],
            'DevOps' => [
                'Docker', 'Kubernetes', 'Jenkins', 'GitLab CI', 'GitHub Actions', 'AWS', 'Azure',
                'Google Cloud', 'Terraform', 'Ansible'
            ],
            'Mobile' => [
                'React Native', 'Flutter', 'iOS', 'Android', 'Xamarin', 'Ionic', 'PWA',
                'Capacitor', 'NativeScript'
            ],
            'Testing' => [
                'PHPUnit', 'Jest', 'Cypress', 'Selenium', 'JUnit', 'PyTest', 'Mocha',
                'TestCafe', 'Playwright'
            ],
            'Outils' => [
                'Git', 'VS Code', 'IntelliJ IDEA', 'Eclipse', 'Postman', 'Jira', 'Confluence',
                'Slack', 'npm', 'Composer'
            ]
        ];

        foreach ($competences as $categorie => $liste) {
            foreach ($liste as $nom) {
                $competence = new Competence();
                $competence->setNom($nom)
                          ->setCategorie($categorie);
                $manager->persist($competence);
            }
        }

        $manager->flush();
    }
}
