<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250109051735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, job_title VARCHAR(255) DEFAULT NULL, summary VARCHAR(255) DEFAULT NULL, salary INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE developpeur DROP INDEX FK_75ED3E3FA76ED395, ADD UNIQUE INDEX UNIQ_22F0C0C7A76ED395 (user_id)');
        $this->addSql('ALTER TABLE developpeur DROP FOREIGN KEY FK_75ED3E3FA76ED395');
        $this->addSql('ALTER TABLE developpeur ADD CONSTRAINT FK_22F0C0C7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE entreprise DROP FOREIGN KEY FK_D19FA7BAA76ED395');
        $this->addSql('DROP INDEX FK_D19FA7BAA76ED395 ON entreprise');
        $this->addSql('ALTER TABLE entreprise ADD nom_entreprise VARCHAR(255) NOT NULL, DROP user_id');
        $this->addSql('ALTER TABLE user ADD entreprise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649A4AEAFEA ON user (entreprise_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE profil');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A4AEAFEA');
        $this->addSql('DROP INDEX IDX_8D93D649A4AEAFEA ON user');
        $this->addSql('ALTER TABLE user DROP entreprise_id');
        $this->addSql('ALTER TABLE developpeur DROP INDEX UNIQ_22F0C0C7A76ED395, ADD INDEX FK_75ED3E3FA76ED395 (user_id)');
        $this->addSql('ALTER TABLE developpeur DROP FOREIGN KEY FK_22F0C0C7A76ED395');
        $this->addSql('ALTER TABLE developpeur ADD CONSTRAINT FK_75ED3E3FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entreprise ADD user_id INT NOT NULL, DROP nom_entreprise');
        $this->addSql('ALTER TABLE entreprise ADD CONSTRAINT FK_D19FA7BAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX FK_D19FA7BAA76ED395 ON entreprise (user_id)');
    }
}
