<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201016104843 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE discussion ADD id_categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE discussion ADD CONSTRAINT FK_C0B9F90F9F34925F FOREIGN KEY (id_categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_C0B9F90F9F34925F ON discussion (id_categorie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE discussion DROP FOREIGN KEY FK_C0B9F90F9F34925F');
        $this->addSql('DROP INDEX IDX_C0B9F90F9F34925F ON discussion');
        $this->addSql('ALTER TABLE discussion DROP id_categorie_id');
    }
}
