<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231114185038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient DROP CONSTRAINT fk_1adad7eb75fa0ff2');
        $this->addSql('DROP INDEX idx_1adad7eb75fa0ff2');
        $this->addSql('ALTER TABLE patient DROP visit_id');
        $this->addSql('ALTER TABLE visit DROP CONSTRAINT fk_437ee93987f4fb17');
        $this->addSql('DROP INDEX idx_437ee93987f4fb17');
        $this->addSql('ALTER TABLE visit DROP doctor_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE patient ADD visit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT fk_1adad7eb75fa0ff2 FOREIGN KEY (visit_id) REFERENCES visit (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_1adad7eb75fa0ff2 ON patient (visit_id)');
        $this->addSql('ALTER TABLE visit ADD doctor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE visit ADD CONSTRAINT fk_437ee93987f4fb17 FOREIGN KEY (doctor_id) REFERENCES doctor (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_437ee93987f4fb17 ON visit (doctor_id)');
    }
}
