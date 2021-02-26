<?php
include './pages/incl/_header.php';

if (isset($_POST['submit'])) {
    include 'src/login.model.php';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/bootstrap/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Systeme Gestion Client</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php

            if (isset($login)) {
            ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Prénom utilisateur <span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href="../../src/deconnect.model.php">Deconnect <span class="glyphicon glyphicon-log-out"></span></a></li>
                </ul>
            <?php
            }
            ?>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<body>
    <div class="main">
        <div class="jumbotron">

            <?php

            if (isset($login)) {
            ?>
                <p class="lead container">
                    <a class="btn btn-primary btn-lg button-option" href="admin.php?action=inscription" role="button">inscription</a>
                    <a class="btn btn-primary btn-lg button-option" href="admin.php?action=liste" role="button">liste</a>
                    <a class="btn btn-primary btn-lg button-option" href="admin.php?action=delete" role="button">delete</a>
                </p>
            <?php
            } else {
                echo "<h1 class='bienvenu'>Bienvenu </h1>";
            }
            ?>

            <hr class="my-4">

        </div>

        <div class="container">





            <section class="container">

                <section class="login-form">
                    <form method="post">
                        <input type="text" name="login" placeholder="Login" class="form-control input-lg" value="<?php if (isset($login)) {
                                                                                                                        echo $login;
                                                                                                                    } ?>" />
                        <span class="help-block"><?php if (isset($errorFormulaire['login'])) {
                                                        echo $errorFormulaire['login'];
                                                    } ?></span>
                        <input type="password" name="password" placeholder="Password" class="form-control input-lg" value="<?php if (isset($password)) {
                                                                                                                                echo $password;
                                                                                                                            } ?>" />
                        <span class="help-block"><?php if (isset($errorFormulaire['password'])) {
                                                        echo $errorFormulaire['password'];
                                                    } ?></span>
                        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">connection</button>
                    </form>
                </section>
            </section>

        </div>

        <div class="footer">

            <p>
                copyright @2021 Magib
            </p>
        </div>
        <script src="public/css/bootstrap/js/ajax.js"></script>
        <script src="public/css/bootstrap/js/bootstrap.js"></script>
        <script src="public/js/javascript.js"></script>
</body>

</html>