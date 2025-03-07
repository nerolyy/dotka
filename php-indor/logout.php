<?php

if (isset($_COOKIE['login'])) {
    setcookie('login', '', time() - 3600*30, '/'); 
}

if (isset($_COOKIE['auth_token'])) {
    setcookie('auth_token', '', time() - 3600, '/'); 
}


header("Location: index.php"); 
exit;
?>
