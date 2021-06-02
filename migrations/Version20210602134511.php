<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210602134511 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job ADD id_pro_categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F84D1E3E79 FOREIGN KEY (id_pro_categorie_id) REFERENCES pro_categorie (id)');
        $this->addSql('CREATE INDEX IDX_FBD8E0F84D1E3E79 ON job (id_pro_categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F84D1E3E79');
        $this->addSql('DROP INDEX IDX_FBD8E0F84D1E3E79 ON job');
        $this->addSql('ALTER TABLE job DROP id_pro_categorie_id');
    }
}
