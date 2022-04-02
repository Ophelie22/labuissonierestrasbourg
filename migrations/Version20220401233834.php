<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401233834 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, slug VARCHAR(255) DEFAULT NULL, color VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_delegue (category_id INT NOT NULL, delegue_id INT NOT NULL, INDEX IDX_F4631A312469DE2 (category_id), INDEX IDX_F4631A3C283956F (delegue_id), PRIMARY KEY(category_id, delegue_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE delegue (id INT AUTO_INCREMENT NOT NULL, featured_document_id INT DEFAULT NULL, title VARCHAR(50) NOT NULL, nomresponsable VARCHAR(50) NOT NULL, content LONGTEXT DEFAULT NULL, featured_text VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_C89E71DDC5572ED6 (featured_document_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, alt_text VARCHAR(255) DEFAULT NULL, filename VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, delegue_id INT DEFAULT NULL, category_id INT DEFAULT NULL, name VARCHAR(50) NOT NULL, menu_order INT DEFAULT NULL, is_visible TINYINT(1) NOT NULL, INDEX IDX_7D053A93C283956F (delegue_id), INDEX IDX_7D053A9312469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category_delegue ADD CONSTRAINT FK_F4631A312469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_delegue ADD CONSTRAINT FK_F4631A3C283956F FOREIGN KEY (delegue_id) REFERENCES delegue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE delegue ADD CONSTRAINT FK_C89E71DDC5572ED6 FOREIGN KEY (featured_document_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A93C283956F FOREIGN KEY (delegue_id) REFERENCES delegue (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A9312469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_delegue DROP FOREIGN KEY FK_F4631A312469DE2');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A9312469DE2');
        $this->addSql('ALTER TABLE category_delegue DROP FOREIGN KEY FK_F4631A3C283956F');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A93C283956F');
        $this->addSql('ALTER TABLE delegue DROP FOREIGN KEY FK_C89E71DDC5572ED6');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE category_delegue');
        $this->addSql('DROP TABLE delegue');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
