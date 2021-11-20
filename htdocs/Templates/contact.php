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
            ?>

            <h4>Sportcenter HealthOne</h4>
            <?php global $times?>
                <?php foreach ($times as $time): ?>
                    <h5><?= $time->day . ": " . $time->startTime . " - " . $time->endTime?></h5>
                <?php endforeach; ?>
            <hr>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
