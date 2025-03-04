<!-- index.php -->
<?php include 'header.php'; ?>

<?php
// Определите, какой контент загружать в зависимости от параметра запроса
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'page1':
        include 'content/page1.php';
        break;
    case 'page2':
        include 'content/page2.php';
        break;
    default:
        include 'content/home.php';
}
?>

<?php include 'footer.php'; ?>
