<?php
/* @var $this yii\web\View */
?>

<h1 class="text-center">Поиск товаров</h1>
<?php foreach ($items as $item) { ?>
    <ul>
        <li><a href="/product/<?=$item->id?>"><?=$item->name?></a></li>
    </ul>
<?php } ?>

