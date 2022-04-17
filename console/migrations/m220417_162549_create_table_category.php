<?php

use yii\db\Migration;

/**
 * Class m220417_162549_create_table_category
 */
class m220417_162549_create_table_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    /*public function safeUp()
    {

    }*/

    /**
     * {@inheritdoc}
     */
    /*public function safeDown()
    {
        echo "m220417_162549_create_table_category cannot be reverted.\n";

        return false;
    }*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->execute("
            CREATE TABLE category (
                id INT(11) NOT NULL AUTO_INCREMENT,
                name VARCHAR(50) NOT NULL COLLATE 'utf8_bin',
                description VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_bin',
                status TINYINT(4) NOT NULL DEFAULT '1',
                PRIMARY KEY (id)
            )
            COLLATE='utf8_bin'
            ENGINE=InnoDB
         ");
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
        /*echo "m220417_162549_create_table_category cannot be reverted.\n";

        return false;*/
    }

}
