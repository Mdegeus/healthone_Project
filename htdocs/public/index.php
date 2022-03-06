<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Times.php';
require '../Modules/Database.php';
require '../Modules/Reviews.php';
require '../Modules/Users.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

session_start();

include_once "../Templates/defaults/modals.php"; //always include modals

switch ($params[1]) {
    case 'admin':
        if (isset($_SESSION['user']) && $_SESSION['user']->id == 1) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $products = getProducts($id);
            } else {
                $categories = getCategories();
            }
            include_once "../Templates/adminpage.php";
        }
        break;
    case 'placereview':
        $id = $_GET['id'];
        include_once "./forms/placereview.inc.php";
        break;
    case 'login':
        include_once "./forms/login.inc.php";
        break;
    case 'register':
        include_once "./forms/register.inc.php";
        break;
    case 'review':
        $id = $_GET['id'];
        $reviews = GetReviews($id);
        include_once "../Templates/reviewPage.php";
        break;
    case 'product':
        $id = $_GET['id'];
        $product = getProduct($id);
        include_once "../Templates/productPage.php";
        break;
    case 'contact':
        $times = getTimes();
        include_once "../Templates/contact.php";
        break;
    case 'category':
        $id = $_GET['id'];
        $products = getProducts($id);
        include_once "../Templates/products.php";
        break;
    case 'categories':
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;
    case 'action':
        $titleSuffix = ' | CRUD';
        include_once "./forms/crud.form.php";
        break;
    case 'logout':
        $_SESSION['user'] = null;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
