<?php
include("../Actions/functions.php");

if (isset($_POST['submit'])){
   $username=htmlspecialchars($_POST['registerUserName']);
//    $mail = htmlspecialchars($_POST['mail']);
//    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//    $password_verif= htmlspecialchars($_POST['password']);
//    $password_confirm= htmlspecialchars($_POST['confirm_password']);
   $checkUsername=check_Data($username,5,10,"l'identifiant");
   if($checkUsername!="true"){
       $error_username=$checkUsername;
   }
}