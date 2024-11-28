<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));


if(strlen($login) < 3) {
    echo "Login error";
    exit;
}
if(strlen($password) < 8) {
    echo "Password error";
    exit;
}

$pdo=new PDO('mysql:host=localhost;dbname=users;port=8889', 'root', 'root');

$sql='INSERT INTO users(login, password) VALUES(?, ?)';
$query=$pdo->prepare($sql);
$query->execute([$login, $password]);


header('Location: auth.php');