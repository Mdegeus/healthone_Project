<!DOCTYPE html>
<html lang="en">
    <?php
        include_once('defaults/head.php');
    ?>
<body>
    <?php
        include_once('defaults/menu.php');
    ?>

    <?php if (isset($_GET['id'])): ?>

        <h3 class="jumbotron">Products</h3>

        <?php 
            global $products;
            global $categoryId;
        ?>
        <?php foreach($products as $product):?>
            <div class="adminItemCard">
                <img class="product-img img-responsive center-block" src="<?= $product->image ?>"/>
                <h5 class=""> <?= $product->title ?> <?php if ($product->enabled == 1) {echo "(Enabled)"; } else {echo "(Disabled)"; } ?> </h5>
                <form class="buttonContainer-right-end" method="post" action="/action">
                    <input name="id" value="<?= $product->id ?>" hidden/>
                    <input name="typ" value="product" hidden/>
                    <input name="categorieId" value="<?= $product->categorieId ?>" hidden/>
                    <button type="submit" class="abutton enable" name="action" value="enable">Enable</button>
                    <button type="submit" class="abutton disable" name="action" value="disable">Disable</button>
                    <button type="submit" class="abutton remove" name="action" value="remove">Remove</button>
                </form>
                
            </div>
        <?php endforeach ?>

    <?php else: ?>

        <h3 class="jumbotron">Categories</h3>

        <?php global $categories ?>
        <?php foreach($categories as $categorie):?>
            
            <div class="adminItemCard">
                <img class="product-img img-responsive center-block" src='<?= $categorie->image ?>'/>
                <h5 class=""> <?= $categorie->title ?> <?php if ($categorie->enabled == 1) {echo "(Enabled)"; } else {echo "(Disabled)"; } ?></h5>
                <form class="buttonContainer-right-end" method="post" action="/action">
                    <input name="id" value="<?= $categorie->id ?>" hidden/>
                    <input name="typ" value="categorie" hidden/>
                    <button class="abutton enable" name="action" value="enable">Enable</button>
                    <button class="abutton disable" name="action" value="disable">Disable</button>
                    <button class="abutton remove" name="action" value="remove">Remove</button>
                    <a type="button" class="abutton select" href="/admin/<?= $categorie->id ?>">Select</a>
                </form>
            </div>
            
        <?php endforeach ?>     

    <?php endif; ?>

</body>
</html>