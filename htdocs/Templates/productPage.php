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
            global $product;
        ?>
        <div class="col-sm-50 col-md-12">
            <div class="card">
                <div class="card-body text-center">
                <img class="product-img img-responsive center-block" style="max-width:25%" src='<?= $product->image ?>'/>
                    <div class="card-title mb-3"> <?= $product->title ?> </div>
                    <hr>
                    <?= $product->discription ?>
                    <br>
                    <br>
                    <a href="/review/<?= $product->id ?>"><button class="btn btn-primary">Reviews</button></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5>Leave a review for this device underneath</h5>
    <button type="button" class="btn btn-primary block-btn review-form-show-btn" data-bs-toggle="modal" data-bs-target="#reviewForm">Place Review</button>
    <br>
    <br>
</div>

</body>
</html>