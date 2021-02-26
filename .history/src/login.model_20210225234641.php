<?php

$errorFormulaire = [];

$login = strip_tags($_POST['login']);
$password = strip_tags($_POST['password']);

if (empty($login)) {
    $errorFormulaire['login'] = 'remplir login';
}
if (empty($password)) {
    $errorFormulaire['password'] = 'remplir password';
}

if (empty($errorFormulaire)) {
    if ($login == 'admin' && $password == 'admin') {
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;

        header('Location:pages/admin.php');
    } else {
        echo "login ou mot de pass incorrecte !";
    }
}
