<?php

global $id;

if (!isset($_POST['register'])) { header('Location: /'); die(); } // if the user is not suposed to be here die and return to home page

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$succes = CreateUser($username, $email, $password);

if ($succes) {
    $userinfo = LoginUser($username, $succes['password']);

    $_SESSION['user'] = $userinfo;

    echo 
    "<head>
        <meta http-equiv='refresh' content='0;URL=/product=$id'>
    </head>"; 
} else {
    echo 
    "<head>
        <meta http-equiv='refresh' content='0;URL=/product=$id'>
    </head>"; 
}

die();



