<?php include '../Actions/users/createUserAction.php'; ?>
<!doctype html>
<html lang="en">
<?php include '../includes/head.php'; ?>

<body style="background-image: url(../assets/images/header-bg.jpg)">
    <?php include '../includes/Navbar.php'; ?>

    <section class="login">
        <form method="post">
            <article class="loginInput">
                <div class="form-group p-4">
                    <div class="form-control mx-auto w-25 text-center">
                        <div class="mb-3">
                            <label for="registerUserNameID" class="form-label">Username\Mail </label>
                            <input class="form-control" type="text" placeholder="Identifiant" name="registerUserName" id="registerUserNameID" value="<?php if (
                                                                                                                                                            isset($username)
                                                                                                                                                        ) {
                                                                                                                                                            echo $username;
                                                                                                                                                        } ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password </label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Votre Mot de passe">
                        </div>
                        <article class="loginButtons">
                            <div class="p-4">
                                <button type="submit" name="submit" class="btn btn-dark registerSubmit">
                                    Se connecter
                                </button>
                            </div>
                            <a href="#">Forgot password</a>
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