<?php

use yii\helpers\Html;
use yii\web\YiiAsset;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->params['breadcrumbs'][] = ['label' => 'Просмотр ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>

<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

    <!-- Single Product Thumb -->
    <div class="single_product_thumb clearfix">
        <div class="product_thumbnail_slides owl-carousel">
            <img src="/img/product-img/product-big-1.jpg" alt="">
            <img src="/img/product-img/product-big-2.jpg" alt="">
            <img src="/img/product-img/product-big-3.jpg" alt="">
        </div>
    </div>

    <!-- Single Product Description -->
    <div class="single_product_desc clearfix">
        <span><?= $model->category0->name; ?></span>
        <a href="cart.html">
            <h2><?= $model->name; ?></h2>
        </a>
        <p class="product-price"><span class="old-price">$65.00</span> $<?= $model->price; ?></p>
        <p class="product-desc"><?= $model->description; ?></p>

        <!-- Form -->
        <form class="cart-form clearfix" method="post">
            <!-- Select Box -->
            <div class="select-box d-flex mt-50 mb-30">
                <select name="select" id="productSize" class="mr-5">
                    <option value="value">Size: XL</option>
                    <option value="value">Size: X</option>
                    <option value="value">Size: M</option>
                    <option value="value">Size: S</option>
                </select>
                <select name="select" id="productColor">
                    <option value="value">Color: Black</option>
                    <option value="value">Color: White</option>
                    <option value="value">Color: Red</option>
                    <option value="value">Color: Purple</option>
                </select>
            </div>
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- ##### Single Product Details Area End ##### -->