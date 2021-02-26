<?php
include './pages/incl/_header.php';

if (isset($_POST['submit'])) {
    include 'src/login.model.php';
}

?>





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

<?php
include 'pages/incl/_footer.php';
?>