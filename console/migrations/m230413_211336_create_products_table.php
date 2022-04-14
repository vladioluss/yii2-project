<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m230413_211336_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text()->null(),
            'category' => $this->integer()->null(),
            'price' => $this->float()->null(),
            'img' => $this->integer()->null(),
            'status' => $this->smallInteger('1')->notNull()->defaultValue('1'),
        ]);

        //Связь таблицы продукт с изображениями
        $this->addForeignKey(
            'fk_imgs_prods',
            'products',
            'img',
            'imgs',
            'id',
            'CASCADE'
        );

        //Связь таблицы продукт с категорией
        $this->addForeignKey(
            'fk_cat_prods',
            'products',
            'category',
            'categories',
            'id'
        );

        //Индекс по категориям
        $this->createIndex(
            'idx_cat_prod',
            'products',
            'category'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');

        // drops index for column `category_id`
        $this->dropIndex(
            'idx_cat_prod',
            'products'
        );

        // drops foreign key for table `category`
        $this->dropForeignKey(
            'fk_cat_prods',
            'products'
        );

        $this->dropForeignKey(
            'fk_imgs_prods',
            'products'
        );
    }
}
