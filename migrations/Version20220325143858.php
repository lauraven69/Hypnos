<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220325143858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE properties ADD surface INT NOT NULL, ADD rooms INT NOT NULL, ADD bedrooms INT NOT NULL, 
        ADD floor INT NOT NULL, ADD city VARCHAR(255) NOT NULL, ADD address VARCHAR(255) NOT NULL, ADD postal_code VARCHAR(255) DEFAULT NULL, 
        ADD sold TINYINT(1) DEFAULT 0 NOT NULL, ADD parking INT NOT NULL, ADD status INT NOT NULL, ADD type INT NOT NULL, 
        ADD price INT NOT NULL, ADD created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, 
        ADD update_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE properties DROP surface, DROP rooms, DROP bedrooms, DROP floor, DROP city, DROP address, DROP postal_code, DROP sold, DROP parking, DROP status, DROP type, DROP price, DROP created_at, DROP update_at');
    }
}
