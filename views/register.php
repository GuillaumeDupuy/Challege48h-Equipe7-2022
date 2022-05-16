<?php include '../Actions/users/createUserAction.php'; ?>
<!doctype html>
<html lang="en">
<?php include '../includes/head.php'; ?>

<body style="background-image: url(../assets/images/header-bg.jpg)">
    <?php include '../includes/Navbar.php'; ?>

    <section class="register">
        <form method="post">
            <?php if (isset($error)) { ?>
                <p style="color:red;text-align:center;"><?= $error ?></p>
            <?php } ?>
            <article class="registerInput">

                <div class="form-group p-4">
                    <div class="form-control mx-auto w-25 text-center">
                        <div class="mb-3">
                            <label for="registerUserNameID" class="form-label">Username</label>
                            <input class="form-control" type="text" placeholder="Identifiant" name="registerUserName" id="registerUserNameID" value="<?php if (
                                                                                                                                                            isset($username)
                                                                                                                                                        ) {
                                                                                                                                                            echo $username;
                                                                                                                                                        } ?>" />
                        </div>
                        <?php if (isset($error_username)) { ?>
                            <p style="color:red;"><?= $error_username ?></p>
                        <?php } ?>

                        <div class="mb-3">
                            <label for="userMailID" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="userMail" id="userMailID" placeholder="Votre mail" value="<?php if (
                                                                                                                                            isset($mail)
                                                                                                                                        ) {
                                                                                                                                            echo $mail;
                                                                                                                                        } ?>">
                                            <?php if (isset($error_mail)) { ?>
                            <p style="color:red;"><?= $error_mail ?></p>
                        <?php } ?>    
                    </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password </label>
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Votre Mot de passe" value="<?php if (
                                                                                                                                                        isset($password_verif)
                                                                                                                                                    ) {
                                                                                                                                                        echo $password_verif;
                                                                                                                                                    } ?>">
                                                                                                                                                                                <?php if (isset($error_Password)) { ?>
                                <p style="color:red;"><?= $error_Password ?></p>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Confirm password </label>
                            <input type="password" class="form-control" id="inputPassword" name="confirmPassword" placeholder="Confirmer Mot de passe" value="<?php if (
                                                                                                                                                                    isset($password_confirm)
                                                                                                                                                                ) {
                                                                                                                                                                    echo $password_confirm;
                                                                                                                                                                } ?>">
                            <?php if (isset($error_ConfirmPassword)) { ?>
                                <p style="color:red;"><?= $error_ConfirmPassword ?></p>
                            <?php } ?>
                        </div>
                        <article class="registerParagraph">
                            <p id="registerReturnMessage"></p>
                        </article>

                        <article class="registerButtons">
                            <div class="p-4">
                                <button type="submit" name="submit" class="btn btn-dark registerSubmit">
                                    S'inscrire
                                </button>
                            </div>
                        </article>
                    </div>
                </div>


            </article>


        </form>
    </section>

</body>




</html>