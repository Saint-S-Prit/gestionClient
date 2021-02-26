<?php
session_start();
if (empty($_SESSION['login'])) {
    header('Location:./index.php');
}
$login = true;

include './pages/incl/_header.php';
?>
<?php
if (isset($_GET['action'])) {

    $action = $_GET['action'];
    switch ($action) {
        case 'inscription':
            include 'registor.php';
            break;
        case 'liste':
            include 'liste.php';
            break;
        case 'delete':
            include 'delete.php';
            break;
        default:
            echo "defaut";
            break;
    }
}
?>




<?php
include './pages/incl/_footer.php';
?>

