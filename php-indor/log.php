<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = $_POST['login']; 
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login");
    $stmt->execute(['login' => $login]); 
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['login'] = $user['login']; 
        header('Location: index.php'); 
        exit;
    } else {
        $error = "Неверный логин или пароль."; 
    }
}
?>


