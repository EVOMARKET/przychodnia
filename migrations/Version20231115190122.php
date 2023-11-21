<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231115190122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visit DROP CONSTRAINT fk_437ee93944bfed0');
        $this->addSql('DROP INDEX idx_437ee93944bfed0');
        $this->addSql('ALTER TABLE visit DROP "pacjęt_id"');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE visit ADD "pacjęt_id" INT NOT NULL');
        $this->addSql('ALTER TABLE visit ADD CONSTRAINT fk_437ee93944bfed0 FOREIGN KEY ("pacjęt_id") REFERENCES patient (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_437ee93944bfed0 ON visit (pacjęt_id)');
    }
}
