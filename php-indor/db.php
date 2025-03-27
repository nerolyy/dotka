<?php
$host = 'localhost';
$dbname = 'users';
$username = 'root';
$log_password = 'root'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $log_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Eror: " . $e->getMessage());
}
?>
