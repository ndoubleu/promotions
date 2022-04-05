<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220405053748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE benefit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, benefit_type_id INTEGER NOT NULL, min_amount INTEGER NOT NULL, amount INTEGER NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, validate_interval VARCHAR(255) NOT NULL, unlimited BOOLEAN NOT NULL, product_limit VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE benefit_type (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, benefit_id_id INTEGER NOT NULL, benefit_type_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('CREATE INDEX IDX_C825C1585802246B ON benefit_type (benefit_id_id)');
        $this->addSql('CREATE TABLE condition (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, rule_id_id INTEGER NOT NULL, condition_item_i INTEGER NOT NULL, condition_value INTEGER NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('CREATE INDEX IDX_BDD68843B176BE97 ON condition (rule_id_id)');
        $this->addSql('CREATE TABLE condition_event_map (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, condition_id_id INTEGER NOT NULL, event_id_id INTEGER NOT NULL)');
        $this->addSql('CREATE INDEX IDX_E62E817A339F7A5C ON condition_event_map (condition_id_id)');
        $this->addSql('CREATE INDEX IDX_E62E817A3E5F2F7B ON condition_event_map (event_id_id)');
        $this->addSql('CREATE TABLE event (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, event_name CLOB NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , deleted_at DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('CREATE TABLE execution_log (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, rule_id_id INTEGER NOT NULL, success BOOLEAN NOT NULL, created DATE NOT NULL, user VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_950D978AB176BE97 ON execution_log (rule_id_id)');
        $this->addSql('CREATE TABLE promotions (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, engine_event_id_id INTEGER NOT NULL, engine_benefit_id_id INTEGER NOT NULL, start_at DATE NOT NULL, end_at DATE NOT NULL, limits VARCHAR(255) NOT NULL, created_at DATE NOT NULL --(DC2Type:date_immutable)
        , created_by VARCHAR(255) NOT NULL, rule_name VARCHAR(255) NOT NULL, rule_status VARCHAR(255) NOT NULL, deleted_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_EA1B3034E9B20612 ON promotions (engine_event_id_id)');
        $this->addSql('CREATE INDEX IDX_EA1B3034AE8FBB04 ON promotions (engine_benefit_id_id)');
        $this->addSql('CREATE TABLE messenger_messages (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, body CLOB NOT NULL, headers CLOB NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE benefit');
        $this->addSql('DROP TABLE benefit_type');
        $this->addSql('DROP TABLE condition');
        $this->addSql('DROP TABLE condition_event_map');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE execution_log');
        $this->addSql('DROP TABLE promotions');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
