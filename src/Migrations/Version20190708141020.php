<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190708141020 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE actualitees CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD roles JSON NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD telephone VARCHAR(30) DEFAULT NULL, DROP nom, DROP prenom, DROP role, DROP pays, CHANGE email email VARCHAR(180) NOT NULL, CHANGE code_postal code_postal VARCHAR(45) DEFAULT NULL, CHANGE categorie categorie VARCHAR(255) DEFAULT NULL, CHANGE news_letter news_letter TINYINT(1) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1D1C63B3E7927C74 ON utilisateur (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE actualitees CHANGE image image VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('DROP INDEX UNIQ_1D1C63B3E7927C74 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur ADD nom VARCHAR(125) NOT NULL COLLATE utf8mb4_unicode_ci, ADD prenom VARCHAR(125) NOT NULL COLLATE utf8mb4_unicode_ci, ADD role LONGTEXT NOT NULL COLLATE utf8mb4_bin, ADD pays VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, DROP roles, DROP password, DROP telephone, CHANGE email email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE code_postal code_postal INT DEFAULT NULL, CHANGE categorie categorie VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE news_letter news_letter TINYINT(1) DEFAULT \'NULL\'');
    }
}
