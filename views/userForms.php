<?php include '../Actions/users/createUserAction.php'; ?>
<!doctype html>
<html lang="en">
<?php include('../includes/head.php'); ?>
  
  <body>
      <?php include('../includes/Navbar.php') ?>
    <section class="registerOrLoginButtons">
      <input type="button" value="Register">
      <input type="button" value="Login">
    </section>

    <section class="register">
      <form method="post">
          
        <article class="registerInput">
          <p>Username : <input type="text" name="registerUserName" id="registerUserNameID" value="<?php if (
              isset($username)
          ) {
              echo $username;
          } ?>"/></p>
          <?php if (isset($error_username)) { ?>
            <p style="color:red;"><?= $error_username ?></p>
          <?php } ?>
          
          <p>E-mail : <input type="text" name="userMail" id="userMailID"/></p>
          <p>Password : <input type="password" name="userPwd" /></p>
          <p>Confirm Password : <input type="password" name="userPwdConfirm" /></p>
        </article>

        <article class="registerParagraph">
          <p id="registerReturnMessage"></p>
        </article>
        
        <article class="registerButtons">
          <input type="submit" value="submit" name="submit" class="registerSubmit">
        </article>
      </form>
    </section>

    <section class="login">
      <article class="loginInput">
        <p>Username : <input type="text" class="userName" /></p>
        <p>Password : <input type="password" class="userPwd" /></p>
      </article>

      <article class="loginParagraph">
        <p class="loginReturnMessage"></p>
      </article>
        
      <article class="loginButtons">
        <a href="#">Forgot password</a>
        <input type="button" value="submit" class="loginSubmit">
      </article>
    </section>
    
  </body>
</html>