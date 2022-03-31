<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220328082817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Added user field to gerant TABLE';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE establishment (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, suite LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gerant (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, fullname VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_D1D45C70E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE roles roles JSON NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE fullname fullname VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (user-id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE establishment');
        $this->addSql('DROP TABLE gerant');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON DEFAULT NULL, CHANGE password password VARCHAR(255) DEFAULT NULL, CHANGE fullname fullname VARCHAR(255) DEFAULT NULL');
    }
}
