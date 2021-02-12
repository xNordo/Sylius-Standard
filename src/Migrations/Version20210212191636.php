<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210212191636 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE sylius_product ADD color varchar(255);');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE sylius_product DROP COLUMN color;');
    }
}
