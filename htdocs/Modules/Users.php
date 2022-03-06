<?php

function CreateUser($username, $email, $password) {

    global $pdo;

    $password = PasswordEncrypt($password);

    if (!FindEmail($email) && !FindUserName($username)) {
        $sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

        $pdo->exec($sql);

        return true;
    }

    return false;
}

function PasswordEncrypt($password)
{
    $hash = password_hash($password, 
          PASSWORD_DEFAULT);

    return $hash;
}

function Verify($input, $check) {
    $verify = password_verify($input, $check);
    return $verify;
}

function FindEmail($email) {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM users WHERE email = '$email'");

    $query->execute();

    $objects = $query->fetchAll(PDO::FETCH_CLASS, "User");

    if (isset($objects[0])) {
        return true;
    } else {
        return false;
    }
}

function FindUserName($username) {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM users WHERE username = '$username'");

    $query->execute();

    $objects = $query->fetchAll(PDO::FETCH_CLASS, "User");

    if (isset($objects[0])) {
        return true;
    } else {
        return false;
    }
}

function GetUserByName($username) {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM users WHERE username = '$username'");

    $query->execute();

    $objects = $query->fetchAll(PDO::FETCH_CLASS, "User");

    if (isset($objects[0])) {
        return $objects[0];
    }else { 
        return false;
    }
}

// function GetUserById($userid) {
//     global $pdo;

//     $query = $pdo->prepare("SELECT * FROM users WHERE 'id' = '$userid'");

//     $query->execute();

//     $objects = $query->fetchAll(PDO::FETCH_CLASS, "User");

//     var_dump($objects);

//     if (isset($objects[0])) {
//         return $objects[0];
//     }else { 
//         return false;
//     }
// }

function LoginUser($username, $givenpassword) {

    global $pdo;

    $targetUser = GetUserByName($username);

    if (!isset($targetUser)) {die();}

    echo $givenpassword;

    if (password_verify($givenpassword, $targetUser->password)) {
        return $targetUser;
    }
}