<?php

setcookie('login', '', time() - 3600, '/'); 
setcookie('login', '', time() - 3600, '/'); 

header('Location: index.php?page=content/main_pages/home');
exit();
?>
