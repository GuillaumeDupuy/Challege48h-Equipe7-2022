<?php
session_start();
require('../Actions/database.php');
if (isset($_POST['submit'])) {
    //Verifier si les champs ne sont pas vides
    if (!empty($_POST['loginUserName']) and !empty($_POST['password'])) {
        $userdata = htmlspecialchars($_POST['loginUserName']); //Email ou Username
        $password = htmlspecialchars($_POST['password']); //mot de passe

        //Verifier si l'utilisateur existe
        $req_User_Exists = $mysql->prepare("SELECT * FROM utilisateurs WHERE mail= ? OR identifiant= ? ");
        $req_User_Exists->execute(array($userdata, $userdata));
        //si l'utilisateur existe on verifie si le mot de passe est correcte
        if ($req_User_Exists->rowCount() > 0) {
            $userInfos = $req_User_Exists->fetch();
            if (password_verify($password, $userInfos['mdp'])) {

                //authentification de l'utilisateur
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['identifiant'] = $userInfos['identifiant'];
                $_SESSION['mdp'] = $userInfos['mdp'];
                $_SESSION['mail'] = $userInfos['mail'];
                //Redirection vers la page d'Accueil
                header('Location: event.php');
            } else { //faux mot de passe
                $errorMsg = "Veuillez verifier les données saisies";
            }
        } else { //Utilisateur inexistant
            $errorMsg = "Veuillez verifier les données saisies";
        }
    } else { //les champs ne sont pas tous complets
        $userdata = htmlspecialchars($_POST['loginUserName']); //Email ou Username
        $password = htmlspecialchars($_POST['password']); //mot de passe
        $errorMsg = "Veuillez Compléter tous les champs";
    }
}