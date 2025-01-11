<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250111100745 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, date_postulation DATETIME NOT NULL, statut VARCHAR(255) NOT NULL, dev_id INT NOT NULL, fiche_de_poste_id INT NOT NULL, INDEX IDX_E33BD3B8A421F7B0 (dev_id), INDEX IDX_E33BD3B8F76AAB91 (fiche_de_poste_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8A421F7B0 FOREIGN KEY (dev_id) REFERENCES dev (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8F76AAB91 FOREIGN KEY (fiche_de_poste_id) REFERENCES fiche_de_poste (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8A421F7B0');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8F76AAB91');
        $this->addSql('DROP TABLE candidature');
    }
}
