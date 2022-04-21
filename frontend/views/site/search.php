<?php
/* @var $this yii\web\View */


foreach ($items as $item) { ?>
    <ul>
        <li><a href="/product/<?=$item->id?>"><?=$item->name?></a></li>
    </ul>
<?php } ?>

