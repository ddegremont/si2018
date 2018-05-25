<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180525054619 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE spa (id INT AUTO_INCREMENT NOT NULL, creation_time DATETIME NOT NULL, title VARCHAR(110) NOT NULL, short_description LONGTEXT NOT NULL, content LONGTEXT NOT NULL, slug VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hostel (id INT AUTO_INCREMENT NOT NULL, creation_time DATETIME NOT NULL, title VARCHAR(110) NOT NULL, short_description LONGTEXT NOT NULL, content LONGTEXT NOT NULL, slug VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, creation_time DATETIME NOT NULL, title VARCHAR(110) NOT NULL, short_description LONGTEXT NOT NULL, content LONGTEXT NOT NULL, slug VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE si4_travel_article CHANGE title title VARCHAR(110) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE spa');
        $this->addSql('DROP TABLE hostel');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('ALTER TABLE si4_travel_article CHANGE title title VARCHAR(200) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
