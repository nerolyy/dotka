<?php
    $login = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));


if(strlen($login) < 3) {
    echo "Login error";
    exit;
}
if(strlen($password) < 8) {
    echo "Password error";
    exit;
}

$pdo=new PDO('mysql:host=localhost;dbname=dota;port=3306', 'root', 'root');


$sql = 'SELECT id FROM dota WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query -> execute([$login, $password]);



if ($query->rowCount() == 0)
    echo"data entered incorrectly";
else 
    setcookie('login', $login, time() + 3600 * 24, "/");
    header("Location: index.php");



