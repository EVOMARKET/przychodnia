<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231115185255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visit ADD pacjęt_id INT NOT NULL');
        $this->addSql('ALTER TABLE visit ADD CONSTRAINT FK_437EE93944BFED0 FOREIGN KEY (pacjęt_id) REFERENCES patient (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_437EE93944BFED0 ON visit (pacjęt_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE visit DROP CONSTRAINT FK_437EE93944BFED0');
        $this->addSql('DROP INDEX IDX_437EE93944BFED0');
        $this->addSql('ALTER TABLE visit DROP pacjęt_id');
    }
}
