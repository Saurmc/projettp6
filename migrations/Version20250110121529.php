<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250110121529 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dev_competence (dev_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_791D47A421F7B0 (dev_id), INDEX IDX_791D4715761DAB (competence_id), PRIMARY KEY(dev_id, competence_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE dev_competence ADD CONSTRAINT FK_791D47A421F7B0 FOREIGN KEY (dev_id) REFERENCES dev (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dev_competence ADD CONSTRAINT FK_791D4715761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fiche_de_poste ADD technologies JSON DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dev_competence DROP FOREIGN KEY FK_791D47A421F7B0');
        $this->addSql('ALTER TABLE dev_competence DROP FOREIGN KEY FK_791D4715761DAB');
        $this->addSql('DROP TABLE dev_competence');
        $this->addSql('ALTER TABLE fiche_de_poste DROP technologies');
    }
}
