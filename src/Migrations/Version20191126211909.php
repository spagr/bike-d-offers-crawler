<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191126211909 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bike_model (id INT AUTO_INCREMENT NOT NULL, brand_id INT NOT NULL, name VARCHAR(255) NOT NULL, year INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_7E386B8D44F5D008 (brand_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brand (id INT AUTO_INCREMENT NOT NULL, popularity INT DEFAULT NULL, name VARCHAR(255) NOT NULL, metadata_text LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offer (id INT AUTO_INCREMENT NOT NULL, model_id INT DEFAULT NULL, source_id INT NOT NULL, seller_id INT NOT NULL, brand_id INT DEFAULT NULL, country VARCHAR(255) NOT NULL, price_czk NUMERIC(10, 2) DEFAULT NULL, currency VARCHAR(3) DEFAULT NULL, price NUMERIC(10, 2) DEFAULT NULL, location VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, color VARCHAR(255) NOT NULL, title VARCHAR(1000) NOT NULL, offer_date DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_29D6873E7975B7E7 (model_id), INDEX IDX_29D6873E953C1C61 (source_id), INDEX IDX_29D6873E8DE820D9 (seller_id), INDEX IDX_29D6873E44F5D008 (brand_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offer_picture (id INT AUTO_INCREMENT NOT NULL, offer_id INT NOT NULL, brand_id INT DEFAULT NULL, model_id INT DEFAULT NULL, url VARCHAR(1000) NOT NULL, local_path VARCHAR(1000) NOT NULL, type VARCHAR(255) DEFAULT NULL, width INT DEFAULT NULL, height INT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_B7D3898053C674EE (offer_id), INDEX IDX_B7D3898044F5D008 (brand_id), INDEX IDX_B7D389807975B7E7 (model_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offer_source (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, base_url VARCHAR(255) NOT NULL, crawler_class VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seller (id INT AUTO_INCREMENT NOT NULL, source_id INT NOT NULL, source_username VARCHAR(255) NOT NULL, profile_url VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_FB1AD3FC953C1C61 (source_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bike_model ADD CONSTRAINT FK_7E386B8D44F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873E7975B7E7 FOREIGN KEY (model_id) REFERENCES bike_model (id)');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873E953C1C61 FOREIGN KEY (source_id) REFERENCES offer_source (id)');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873E8DE820D9 FOREIGN KEY (seller_id) REFERENCES seller (id)');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873E44F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('ALTER TABLE offer_picture ADD CONSTRAINT FK_B7D3898053C674EE FOREIGN KEY (offer_id) REFERENCES offer (id)');
        $this->addSql('ALTER TABLE offer_picture ADD CONSTRAINT FK_B7D3898044F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('ALTER TABLE offer_picture ADD CONSTRAINT FK_B7D389807975B7E7 FOREIGN KEY (model_id) REFERENCES bike_model (id)');
        $this->addSql('ALTER TABLE seller ADD CONSTRAINT FK_FB1AD3FC953C1C61 FOREIGN KEY (source_id) REFERENCES offer_source (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873E7975B7E7');
        $this->addSql('ALTER TABLE offer_picture DROP FOREIGN KEY FK_B7D389807975B7E7');
        $this->addSql('ALTER TABLE bike_model DROP FOREIGN KEY FK_7E386B8D44F5D008');
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873E44F5D008');
        $this->addSql('ALTER TABLE offer_picture DROP FOREIGN KEY FK_B7D3898044F5D008');
        $this->addSql('ALTER TABLE offer_picture DROP FOREIGN KEY FK_B7D3898053C674EE');
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873E953C1C61');
        $this->addSql('ALTER TABLE seller DROP FOREIGN KEY FK_FB1AD3FC953C1C61');
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873E8DE820D9');
        $this->addSql('DROP TABLE bike_model');
        $this->addSql('DROP TABLE brand');
        $this->addSql('DROP TABLE offer');
        $this->addSql('DROP TABLE offer_picture');
        $this->addSql('DROP TABLE offer_source');
        $this->addSql('DROP TABLE seller');
    }
}
