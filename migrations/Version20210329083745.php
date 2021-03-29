<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210329083745 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE magasin (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE magasin_promotion (magasin_id INT NOT NULL, promotion_id INT NOT NULL, INDEX IDX_281C724620096AE3 (magasin_id), INDEX IDX_281C7246139DF194 (promotion_id), PRIMARY KEY(magasin_id, promotion_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, description VARCHAR(255) NOT NULL, mention_legale VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE magasin_promotion ADD CONSTRAINT FK_281C724620096AE3 FOREIGN KEY (magasin_id) REFERENCES magasin (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE magasin_promotion ADD CONSTRAINT FK_281C7246139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE magasin_promotion DROP FOREIGN KEY FK_281C724620096AE3');
        $this->addSql('ALTER TABLE magasin_promotion DROP FOREIGN KEY FK_281C7246139DF194');
        $this->addSql('DROP TABLE magasin');
        $this->addSql('DROP TABLE magasin_promotion');
        $this->addSql('DROP TABLE promotion');
    }
}
