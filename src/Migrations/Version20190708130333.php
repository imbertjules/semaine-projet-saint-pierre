<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190708130333 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE actualitees (id INT AUTO_INCREMENT NOT NULL, lien VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, contenu LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE actualités');
        $this->addSql('ALTER TABLE utilisateur CHANGE code_postal code_postal INT DEFAULT NULL, CHANGE role role JSON NOT NULL, CHANGE categorie categorie VARCHAR(255) DEFAULT NULL, CHANGE news_letter news_letter TINYINT(1) DEFAULT NULL, CHANGE pays pays VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE actualités (id INT AUTO_INCREMENT NOT NULL, lien VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, titre VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, image VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, contenu LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE actualitees');
        $this->addSql('ALTER TABLE utilisateur CHANGE code_postal code_postal INT DEFAULT NULL, CHANGE role role LONGTEXT NOT NULL COLLATE utf8mb4_bin, CHANGE categorie categorie VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE news_letter news_letter TINYINT(1) DEFAULT \'NULL\', CHANGE pays pays VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
