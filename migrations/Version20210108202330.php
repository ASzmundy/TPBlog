<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210108202330 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6660BB6FE6');
        $this->addSql('DROP INDEX IDX_23A0E6660BB6FE6 ON article');
        $this->addSql('ALTER TABLE article CHANGE auteur_id user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E668D93D649 FOREIGN KEY (user) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_23A0E668D93D649 ON article (user)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E668D93D649');
        $this->addSql('DROP INDEX IDX_23A0E668D93D649 ON article');
        $this->addSql('ALTER TABLE article CHANGE user auteur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6660BB6FE6 FOREIGN KEY (auteur_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_23A0E6660BB6FE6 ON article (auteur_id)');
    }
}
