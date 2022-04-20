<?php

/** @var yii\web\View $this */


use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- ##### Shop Grid Area Start ##### -->
<section class="shop_grid_area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-10">Категории</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">
                                <?php foreach ($categories as $category) { ?>
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#"><?= $category->name ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    <p><span><?= $productCount ?></span> products found</p>
                                </div>
                                <!-- Sorting -->
                                <div class="product-sorting d-flex">
                                    <p>Sort by:</p>
                                    <form action="#" method="get">
                                        <select name="select" id="sortByselect">
                                            <option value="value">Highest Rated</option>
                                            <option value="value">Newest</option>
                                            <option value="value">Price: $$ - $</option>
                                            <option value="value">Price: $ - $$</option>
                                        </select>
                                        <input type="submit" class="d-none" value="">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php foreach ($model as $item) { ?>
                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="/img/product-img/product-1.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="/img/product-img/product-2.jpg" alt="">

                                        <!-- Product Badge -->
                                        <div class="product-badge offer-badge">
                                            <span>-30%</span>
                                        </div>
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span><?= $item->category0->name ?></span>
                                        <a href="<?= Url::to(['product/view', 'id' => $item->id]) ?>">
                                            <h6><?= $item->name ?></h6>
                                        </a>
                                        <p class="product-price"><span class="old-price">$75.00</span> $<?= $item->price ?></p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="navigation">
                    <?= // отображаем ссылки на страницы
                    LinkPager::widget([
                        'pagination' => $pages,
                        // Настройки контейнера пагинации
                        'options' => [
                            'class' => 'pagination mt-50 mb-70',
                            'style' => ''
                        ],
                        // Настройки классов css для ссылок
                        'linkOptions' => [
                            'class' => 'page-link'
                        ],
                        'maxButtonCount' => 6,
                        'pageCssClass' => 'page-item',
                        //First option value
                        'firstPageLabel' => 'В начало',
                        //Last option value
                        'lastPageLabel' => 'В конец',
                        //Current Active option value
                        'activePageCssClass' => 'page-item-active'
                    ]);?>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ##### Shop Grid Area End ##### -->