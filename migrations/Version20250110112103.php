<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250110112103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_94D4687F6C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche_de_poste_competence (fiche_de_poste_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_CBFCB3F8F76AAB91 (fiche_de_poste_id), INDEX IDX_CBFCB3F815761DAB (competence_id), PRIMARY KEY(fiche_de_poste_id, competence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche_de_poste_competence ADD CONSTRAINT FK_CBFCB3F8F76AAB91 FOREIGN KEY (fiche_de_poste_id) REFERENCES fiche_de_poste (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fiche_de_poste_competence ADD CONSTRAINT FK_CBFCB3F815761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fiche_de_poste DROP technologies');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_de_poste_competence DROP FOREIGN KEY FK_CBFCB3F8F76AAB91');
        $this->addSql('ALTER TABLE fiche_de_poste_competence DROP FOREIGN KEY FK_CBFCB3F815761DAB');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE fiche_de_poste_competence');
        $this->addSql('ALTER TABLE fiche_de_poste ADD technologies JSON NOT NULL');
    }
}
