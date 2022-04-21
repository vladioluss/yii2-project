<?php

namespace common\models;

use common\models\Products;
use Yii;

/**
 * This is the model class for table "imgs".
 *
 * @property int $id
 * @property string|null $imgs
 *
 * @property Products[] $products
 */
class Imgs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'imgs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imgs'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imgs' => 'Imgs',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['img' => 'id']);
    }
}
