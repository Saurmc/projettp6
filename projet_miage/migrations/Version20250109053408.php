<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250109053408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fiche_poste (id INT AUTO_INCREMENT NOT NULL, entreprise_id INT NOT NULL, titre_poste VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, technologie VARCHAR(255) NOT NULL, experience INT NOT NULL, salaire DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, view_count INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', last_viewed DATETIME DEFAULT NULL, INDEX IDX_609E594A4AEAFEA (entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche_poste ADD CONSTRAINT FK_609E594A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE developpeur ADD view_count INT NOT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD last_viewed DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE entreprise ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP titre_poste, DROP technologie, DROP experience, DROP salaire, CHANGE description description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_poste DROP FOREIGN KEY FK_609E594A4AEAFEA');
        $this->addSql('DROP TABLE fiche_poste');
        $this->addSql('ALTER TABLE developpeur DROP view_count, DROP created_at, DROP last_viewed');
        $this->addSql('ALTER TABLE entreprise ADD titre_poste VARCHAR(255) NOT NULL, ADD technologie VARCHAR(255) DEFAULT NULL, ADD experience INT DEFAULT NULL, ADD salaire DOUBLE PRECISION NOT NULL, DROP created_at, CHANGE description description VARCHAR(512) NOT NULL');
    }
}
