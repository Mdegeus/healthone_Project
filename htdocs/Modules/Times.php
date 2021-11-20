<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getTimes()
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM t");

    $query->execute();

    $p= $query->fetchAll(PDO::FETCH_CLASS,"Time");

    return $p;
}