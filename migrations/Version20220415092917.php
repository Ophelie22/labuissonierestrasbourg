<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220415092917 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE delegue_category (delegue_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_EF72FA79C283956F (delegue_id), INDEX IDX_EF72FA7912469DE2 (category_id), PRIMARY KEY(delegue_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE delegue_category ADD CONSTRAINT FK_EF72FA79C283956F FOREIGN KEY (delegue_id) REFERENCES delegue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE delegue_category ADD CONSTRAINT FK_EF72FA7912469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE category_delegue');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_delegue (category_id INT NOT NULL, delegue_id INT NOT NULL, INDEX IDX_F4631A312469DE2 (category_id), INDEX IDX_F4631A3C283956F (delegue_id), PRIMARY KEY(category_id, delegue_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE category_delegue ADD CONSTRAINT FK_F4631A312469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_delegue ADD CONSTRAINT FK_F4631A3C283956F FOREIGN KEY (delegue_id) REFERENCES delegue (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('DROP TABLE delegue_category');
    }
}
