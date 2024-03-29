<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230622085403 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD firstname VARCHAR(255) NOT NULL, ADD lastname VARCHAR(255) NOT NULL, ADD phone VARCHAR(100) NOT NULL, ADD address VARCHAR(255) NOT NULL, ADD city VARCHAR(255) NOT NULL, ADD postal VARCHAR(255) NOT NULL, ADD country VARCHAR(255) NOT NULL, ADD caution TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP firstname, DROP lastname, DROP phone, DROP address, DROP city, DROP postal, DROP country, DROP caution');
    }
}
