<?php

global $pdo;

if (isset($_POST['type']) && $_POST['type'] == "review") {

    $productId = $_GET['id'];
    $text = $_POST['comment'];
    $rating = $_POST['rating'];
    $user = $_SESSION['user'];

    $sql = "INSERT INTO reviews (product_id, text, rating, user_id)
    VALUES ('$productId', '$text', '$rating', '$user->id')";
    $pdo->exec($sql);

    echo 
    "<head>
        <meta http-equiv='refresh' content='0;URL=/product=$id'>
    </head>";
}

?>