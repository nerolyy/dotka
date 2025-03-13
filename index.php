<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; 


$contentFile = $page . '.php';
if (!file_exists($contentFile)) {
    $contentFile = 'content/main_pages/home.php';
}
?>

<?php include 'content/main_pages/loader.php'; ?> 
<main id="content">
    <?php include 'content/main_pages/header.php'; ?>
    <?php include $contentFile; ?>
</main>
   
</body>
</html>
