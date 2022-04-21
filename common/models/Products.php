<?php

namespace common\models;

use app\models\Imgs;
use backend\models\Category;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $category
 * @property float|null $price
 * @property int|null $img
 * @property int $status
 *
 * @property Category $category0
 * @property Imgs $img0
 */
class Products extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['category', 'img', 'status'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category' => 'id']],
            [['img'], 'exist', 'skipOnError' => true, 'targetClass' => Imgs::className(), 'targetAttribute' => ['img' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'category' => 'Category',
            'price' => 'Price',
            'img' => 'Img',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Category0]].
     *
     * @return ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(Category::class, ['id' => 'category']);
    }

    /**
     * Gets query for [[Img0]].
     *
     * @return ActiveQuery
     */
    public function getImg0()
    {
        return $this->hasOne(Imgs::class, ['id' => 'img']);
    }
}
