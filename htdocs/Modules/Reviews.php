<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getReviews(int $reviewId)
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM reviews WHERE product_id = $reviewId");

    $query->execute();

    $p= $query->fetchAll(PDO::FETCH_CLASS,"Review");

    return $p;
}
