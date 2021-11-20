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
                <img class="product-img img-responsive center-block" style="max-width:25%" src='<?= $product->image ?>'/>
                    <div class="card-title mb-3"> <?= $product->title ?> </div>
                    <hr>
                    <?= $product->discription ?>
                    <br>
                    <br>
                    <a href="/categories/<?= $categoryId ?>/product/<?= $product->id ?>/reviews"><button class="btn btn-primary">Reviews</button></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5>Leave a review for this device underneath</h5>
    <form method="post">
        <div class="center-div">
            <input type="text" hidden name="type" value="review">
            <input type="text" hidden name="product-id" value="<?= $product->id ?>">
            <input type="text" required name="name" placeholder="Display Name" style="width: 48%;">
            <input type="text" required name="email" placeholder="Email" style="width: 48%;">
            <br>
            <br>
            <textarea type="text" required name="reviewText" style="height: 150px; width: 100%;"></textarea>
            <br>
            <select name="rating" value="5" style="width: 40%;">
                <option value="1">1 Star</option>
                <option value="2">2 Star</option>
                <option value="3">3 Star</option>
                <option value="4">4 Star</option>
                <option value="5">5 Star</option>
            </select>
            <button class="btn btn-primary">Sent</button>
        </div>
    </form>

<?php

global $pdo;

if (isset($_POST['type']) && $_POST['type'] == "review") {

    $productId = $_POST['product-id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['reviewText'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO reviews (product_id, name, email, text, rating)
    VALUES ('$productId', '$name', '$email', '$text', '$rating')";
    $pdo->exec($sql);
}

?>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>