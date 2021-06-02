<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210602123305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, job_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pro_categorie (id INT AUTO_INCREMENT NOT NULL, name_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE professionel (id INT AUTO_INCREMENT NOT NULL, id_pro_categorie_id INT NOT NULL, id_job_id INT NOT NULL, adress VARCHAR(255) DEFAULT NULL, price INT DEFAULT NULL, company_name VARCHAR(255) DEFAULT NULL, INDEX IDX_D7D9B6AE4D1E3E79 (id_pro_categorie_id), INDEX IDX_D7D9B6AE2DD7FB44 (id_job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE professionel ADD CONSTRAINT FK_D7D9B6AE4D1E3E79 FOREIGN KEY (id_pro_categorie_id) REFERENCES pro_categorie (id)');
        $this->addSql('ALTER TABLE professionel ADD CONSTRAINT FK_D7D9B6AE2DD7FB44 FOREIGN KEY (id_job_id) REFERENCES job (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE professionel DROP FOREIGN KEY FK_D7D9B6AE2DD7FB44');
        $this->addSql('ALTER TABLE professionel DROP FOREIGN KEY FK_D7D9B6AE4D1E3E79');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE pro_categorie');
        $this->addSql('DROP TABLE professionel');
    }
}
