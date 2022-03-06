<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getReviews(int $reviewId)
{
    global $pdo;

    $query = $pdo->prepare("SELECT reviews.*, users.username FROM reviews 
    INNER JOIN users 
    ON users.id = reviews.user_id
    WHERE product_id = $reviewId");

    $query->execute();

    $p= $query->fetchAll(PDO::FETCH_CLASS,"Review");

    return $p;
}
