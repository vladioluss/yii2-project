<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Imgs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imgs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imgs[]')->fileInput(['multiple' => 'multiple']); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
