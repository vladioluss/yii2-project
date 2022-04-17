<?php

use yii\db\Migration;

/**
 * Class m220417_162634_create_table_products
 */
class m220417_162634_create_table_products extends Migration
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

        $this->execute("ALTER TABLE products ENGINE=InnoDB");

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
            'category',
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
        /*$this->dropTable('{{%products}}');

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
        );*/
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220417_162634_create_table_products cannot be reverted.\n";

        return false;
    }
    */
}
