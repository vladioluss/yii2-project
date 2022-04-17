<?php

use yii\db\Migration;

/**
 * Class m220417_162616_create_table_imgs
 */
class m220417_162616_create_table_imgs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%imgs}}', [
            'id' => $this->primaryKey(),
            'imgs' => $this->string()
        ]);

        $this->execute("ALTER TABLE imgs ENGINE=InnoDB");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%imgs}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220417_162616_create_table_imgs cannot be reverted.\n";

        return false;
    }
    */
}
