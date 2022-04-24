<?php

use backend\models\ProductsForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $modelForm ProductsForm */

$this->title = 'Новая запись';
$this->params['breadcrumbs'][] = ['label' => 'Товар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
        'modelForm' => $modelForm
    ]) ?>

</div>
