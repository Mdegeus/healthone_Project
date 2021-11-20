<!DOCTYPE html>
    <html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">
            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');

            global $reviews;
            global $categoryId;
            global $productId;
            ?>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
                    <li class="breadcrumb-item"><a href="/categories/<?= $categoryId ?>">Previous Category</a></li>
                    <li class="breadcrumb-item"><a href="/categories/<?= $categoryId ?>/product/<?= $productId ?>">Previous Product</a></li>
                </ol>
            </nav>

            <?php foreach ($reviews as $review):?>
            <?php 
                $reviewClass = "reviewCardHigh";
                if ($review->rating < 3) {
                    $reviewClass = "reviewCardLow";
                }
            ?>
                <div class="card <?=$reviewClass?>">
                    <div class="card-body">
                        <?php for ($i=0; $i < 5; $i++):?>
                            <?php if ($i < $review->rating): ?>
                                    <img src="/public/img/extra/star_Positive.svg" style="width: 2em"></img>
                                <?php else: ?>
                                    <img src="/public/img/extra/star_Negative.svg" style="width: 2em"></img>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <p>Rating: <?= $review->rating ?></p>
                        <p><?= $review->text ?></p>
                        <small><?=$review->date . " | " . " Review uploaded by: " . $review->name?></small>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if (!isset($reviews[0])):?>
                <div class="card">
                    <div class="card-body">No Reviews here yet, Would you like to post one yourself? please go back to the previous page</div>
                </div>
            <?php endif; ?>

            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
