<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180829134958 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE artikel ADD bezeichnung2 VARCHAR(255) DEFAULT NULL, ADD artikelnummer VARCHAR(50) DEFAULT NULL, ADD vpebezeichnung VARCHAR(100) DEFAULT NULL, ADD ean VARCHAR(50) DEFAULT NULL, ADD uwgid INT NOT NULL, ADD meid INT NOT NULL, ADD mwstid INT NOT NULL, ADD listenpreis NUMERIC(8, 2) NOT NULL, ADD ekdurch NUMERIC(8, 2) NOT NULL, ADD mindestbestand NUMERIC(8, 2) NOT NULL, ADD bestand NUMERIC(8, 2) NOT NULL, ADD mindestbestellmenge NUMERIC(8, 2) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE artikel DROP bezeichnung2, DROP artikelnummer, DROP vpebezeichnung, DROP ean, DROP uwgid, DROP meid, DROP mwstid, DROP listenpreis, DROP ekdurch, DROP mindestbestand, DROP bestand, DROP mindestbestellmenge');
    }
}
