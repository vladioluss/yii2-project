<?php

namespace common\models;

use common\models\Category;

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
 * @property string|null $img
 * @property int $status
 *
 * @property Category $category0
 * @property Imgs $img0
 */
class Products extends ActiveRecord
{

    public $image;

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
            [['category', 'status'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category' => 'id']],
            //[['img'], 'exist', 'skipOnError' => true, 'targetClass' => Imgs::className(), 'targetAttribute' => ['img' => 'id']],
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


    public function uploadImage() {
        die('Зашло в метод');

        foreach ($this->image as $file) {
            $fileName = \Yii::$app->getSecurity()->generateRandomString(15);
            $file->saveAs('imgs/'.$fileName.'.'.$file->extension);
        }
    }
}
