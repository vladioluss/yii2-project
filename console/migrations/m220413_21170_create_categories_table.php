<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m220413_21170_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
            'status' => $this->smallInteger('1')->notNull()->defaultValue('1'),
        ]);

        /*
         * CREATE TABLE `categories` (
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(50) NOT NULL COLLATE 'utf8_bin',
                `description` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_bin',
                `status` TINYINT(4) NOT NULL DEFAULT '1',
                PRIMARY KEY (`id`)
            )
            COLLATE='utf8_bin'
            ENGINE=InnoDB;
         * */
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categories}}');
    }
}
