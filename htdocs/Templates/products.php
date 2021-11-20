<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>
    <div class="row gy-3 ">
        <?php 
            global $products;
            global $categoryId;
        ?>
        <?php $index = 0 ?>
        <?php foreach($products as $product):?>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/categories/<?= $categoryId ?>/product/<?= $product->id ?>">
                            <img class="product-img img-responsive center-block" src="<?= $product->image ?>"/>
                        </a>
                    </div>
                    <div class="card-title mb-3"> <?= $product->title ?> </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>