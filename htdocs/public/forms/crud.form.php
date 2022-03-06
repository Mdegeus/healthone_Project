<?php

if (!isset($_POST['action'])) {
    echo
    "<head>
       <meta http-equiv='refresh' content='.2;URL=/'>
    </head>";
    die(); } // if the user is not supposed to be here die and return to home page

$action = $_POST['action'];
$typ = $_POST['typ'];
$id = $_POST['id'];

global $pdo;

switch ($action) {
    case 'enable':
        if ($typ == "categorie") {
            $sql = "UPDATE categories SET enabled = 1 WHERE id = '$id'";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();
        } else if ($typ == "product") {
            $sql = "UPDATE products SET enabled = 1 WHERE id = '$id'";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();
        }
        break;
    case 'disable':
        if ($typ == "categorie") {
            $sql = "UPDATE categories SET enabled = 0 WHERE id = '$id'";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();
        } else if ($typ == "product") {
            $sql = "UPDATE products SET enabled = 0 WHERE id = '$id'";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();
        }
        break;
    case 'remove':
        if ($typ == "categorie") {
            $sql = "DELETE FROM categories WHERE id = '$id'";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();
        } else if ($typ == "product") {
            $sql = "DELETE FROM products WHERE id = '$id'";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();
        }
        break;
    case 'create':
        break;
}


if ($typ == "categorie") {
    echo "<head>";
    echo "<meta http-equiv='refresh' content='0;URL=/admin/'>";
    echo "<head>";
} else if ($typ == "product") {
    $categorieId = $_POST['categorieId'];

    echo "<head>";
    echo "<meta http-equiv='refresh' content='0;URL=/admin/" . $categorieId . "'>";
    echo "<head>";
}

die();