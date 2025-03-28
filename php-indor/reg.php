<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));


if(strlen($login) < 3) {
    echo "Login должен иметь более 3-х символов!";
    exit;
}
if(strlen($password) < 8) {
    echo "Password должен иметь более 8-ми символов!";
    exit;
}


require 'db.php';

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql='INSERT INTO users(login, password) VALUES(?, ?)';
$query=$pdo->prepare($sql);
try {
    $query->execute([$login, $hash]); 
    header('Location: index.php?page=content/main_pages/home'); 
    exit;
} catch (PDOException $e) {
    echo "Ошибка регистрации: " . $e->getMessage();  
    exit;
}

?>
