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
            <li class="breadcrumb-item"><a href="/categories/<?= $categoryId ?>">Previous Category</a></li>
        </ol>
    </nav>
    <div class="row gy-3 ">
    <?php 
            global $products;
            global $categoryId;
        ?>
        <div class="col-sm-50 col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                    <img class="product-img img-responsive center-block" style="max-width:45%" src='<?= $product->image ?>'/>
                        <div class="card-title mb-3"> <?= $product->title ?> </div>
                        <hr>
                        <?= $product->discription ?>
                    </div>
                </div>
        </div>
    </div>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>