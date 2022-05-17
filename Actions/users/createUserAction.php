<?php
session_start();
require ('../Actions/database.php');
include '../Actions/functions.php';
$role="";
if (isset($_POST['submit'])) {
    if (
        !empty($_POST['registerUserName']) and
        !empty($_POST['password']) and
        !empty($_POST['userMail'])
    ) {
        //formValues
        $username = htmlspecialchars($_POST['registerUserName']);
        $mail = htmlspecialchars($_POST['userMail']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password_verif = htmlspecialchars($_POST['password']);
        $password_confirm = htmlspecialchars($_POST['confirmPassword']);
        if(!empty($_POST['role'])){

            $role=$_POST['role'];
        }

        //checkers
        $checkUsername = check_Data($username, 5, 10, "l'identifiant");
        $checkPassword = check_Data($password_verif, 5, 10, 'mot de passe');

        //checking if user exists
        $req_User_Exists = User_exists($username, 'identifiant');
        $req_Mail_Exists = User_exists($mail, 'mail');
        $user_Exists = $req_User_Exists->rowCount() > 0;
        $mail_Exists = $req_Mail_Exists->rowCount() > 0;
        $checkConfirmPassword = $password_confirm == $password_verif;
        if (
            !$user_Exists &&
            !$mail_Exists &&
            $checkUsername == 'true' &&
            $checkConfirmPassword
        ) {
            //insertion dans la bdd
            //insertion de l'utilisateur dans la base de données
            $req_Add_User = $mysql->prepare(
                'INSERT INTO utilisateurs(identifiant,mdp,mail,role) VALUES(?, ?, ?,?)'
            );
            $req_Add_User->execute([$username, $password, $mail, $role]);
            $getInfosOfThisUser = $mysql->prepare(
                'SELECT * from utilisateurs WHERE identifiant = ? AND mail = ?'
            );
            $getInfosOfThisUser->execute([$username, $mail]);
            $userInfos = $getInfosOfThisUser->fetch();
            // //authentification de l'utilisateur
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['identifiant'] = $userInfos['identifiant'];
            $_SESSION['mdp'] = $userInfos['mdp'];
            $_SESSION['mail'] = $userInfos['mail'];
            $_SESSION['role']=$userInfos['role'];
            //Redirection vers la page d'Accueil
            header('Location: index.php');
        } else {
            if ($user_Exists) {
                $error_username = "$username existe déja";
            } elseif ($checkUsername != 'true') {
                $error_username = $checkUsername;
            }
            if ($mail_Exists) {
                $error_mail = "$mail existe déja";
            }
            if (!$checkConfirmPassword) {
                $error_ConfirmPassword = 'passwords not matching';
            }
        }
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}
