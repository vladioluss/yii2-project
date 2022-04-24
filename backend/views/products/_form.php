<?php

use common\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'img[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
    <?php
        $products = Category::find()->all();
        $items = ArrayHelper::map($products,'id','name');
        echo $form->field($model, 'category')->dropDownList($items);
    ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'status')
        ->dropDownList([
            '1' => 'Активно',
            '0' => 'Не активно'
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
