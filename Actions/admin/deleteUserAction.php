<?php
session_start();
if(!isset($_SESSION['role']) or $_SESSION['role']!="admin"){
    header("Location: ../../views/index.php");
}
require('../database.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfUser = $_GET['id'];
    $req_User_Exist = $mysql->prepare("SELECT * FROM utilisateurs WHERE id= ?");
    $req_User_Exist->execute(array($idOfUser));
    if ($req_User_Exist->rowCount() > 0) {
        $UserInfos = $req_User_Exist->fetch();
        if ($_SESSION['role']=="admin" or $UserInfos['id'] == $_SESSION['id']) {
            $deleteUser = $mysql->prepare("DELETE FROM utilisateurs WHERE id=?");
            $deleteUser->execute(array($idOfUser));
            $deleteEvent = $mysql->prepare("DELETE FROM evenement WHERE idUser=?");
            $deleteEvent->execute(array($idOfUser));
            echo "User supprimé";
                header('Location:../../views/backOffice.php?id=utilisateurs');
            
        } else {
            echo "Aucun User trouvé";
            // $errorMsg = "Vous n'avez pas le droit pour modifier cet User";
        }
    }else{
        echo "Cet User n'existe pas ou a été supprimé"; 
    }
} else {
    echo "Aucun User trouvé";
}