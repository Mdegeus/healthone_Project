<?php

if (!isset($_POST['login'])) { header('Location: /'); die(); } // if the user is not suposed to be here die and return to home page

$username = $_POST['username'];
$password = $_POST['password'];

$userinfo = LoginUser($username, $password);

$_SESSION['user'] = $userinfo;

echo 
    "<head>
        <meta http-equiv='refresh' content='0;URL=/'>
    </head>"; 
die();