<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.

function getCategories()
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM categories");

    $query->execute();

    $categories = $query->fetchAll(PDO::FETCH_CLASS,"Category");

    return $categories;
}

function getCategoryName(int $id)
{
    global $pdo;
    $categorie = $pdo->query("SELECT * FROM categories WHERE id=$id");
    $categories=$categorie->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $categories[0]; // make sure that it returns a item and not a table
}