<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220505143222 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category ADD yes_id INT NOT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C12CB716C7 FOREIGN KEY (yes_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_64C19C12CB716C7 ON category (yes_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C12CB716C7');
        $this->addSql('DROP INDEX IDX_64C19C12CB716C7 ON category');
        $this->addSql('ALTER TABLE category DROP yes_id');
    }
}
