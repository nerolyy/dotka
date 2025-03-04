
<!-- index.php -->
<?php
// Определяем, какой контент загружать
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; 

// Проверяем, существует ли файл контента
$contentFile = $page . '.php';
if (!file_exists($contentFile)) {
    $contentFile = 'home.php'; // Если файл не существует, загружаем по умолчанию
}
?>

<?php include 'header.php'; ?>
   
<?php include $contentFile; ?>
   
</body>
</html>
   

