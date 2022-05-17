<style>
</style>

<?php include '../Actions/users/loginAction.php'; ?>
<!doctype html>
<html lang="en">
<?php include '../includes/head.php'; ?>

<body style="background-image: url(../assets/images/header-bg.jpg)">
    <?php include '../includes/Navbar.php'; ?>

    <section class="login">
    <h1 style="color:white;text-align:center;">Connexion</h1>
        <form method="post">

        <?php if (isset($errorMsg)) { ?>
                <p style="color:red;text-align:center;"><?= $errorMsg ?></p>
            <?php } ?>
            <article class="loginInput">
                <div class="form-group p-4">
                    <div class="form-control mx-auto w-25 text-center">
                        <div class="mb-3">
                            <label for="loginUserNameID" class="form-label">Username\Mail </label>
                            <input class="form-control" type="text" placeholder="Identifiant" name="loginUserName" id="loginUserNameID" value="<?php if (
                                                                                                                                                            isset($userdata)
                                                                                                                                                        ) {
                                                                                                                                                            echo $userdata;
                                                                                                                                                        } ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password </label>
                            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Votre Mot de passe">
                        </div>
                        <article class="loginButtons">
                            <div class="p-4">
                                <button type="submit" name="submit" class="btn btn-dark registerSubmit">
                                    Se connecter
                                </button>
                            </div>
                            <a href=s"#">Forgot password</a>
                        </article>
                    </div>
                </div>
            </article>

            <article class="loginParagraph">
                <p class="loginReturnMessage"></p>
            </article>


        </form>
    </section>

</body>

</html>