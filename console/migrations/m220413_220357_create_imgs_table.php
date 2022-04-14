<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%imgs}}`.
 */
class m220413_220357_create_imgs_table extends Migration
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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%imgs}}');
    }
}
