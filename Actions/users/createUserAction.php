<?php


if (isset($_POST['submit'])){
   $username=htmlspecialchars($_POST['registerUserName']);
   if(strlen($username)<5){
       $error_username="username doit contenir au moins 5 caractères";
   }
}