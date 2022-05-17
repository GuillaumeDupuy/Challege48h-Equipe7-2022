<?php
session_start();
if(!isset($_SESSION['role']) or $_SESSION['role']!="admin"){
    header("Location: ../../views/index.php");
}
require('../database.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfEvent = $_GET['id'];
    $req_User_Exist = $mysql->prepare("SELECT * FROM evenement WHERE id= ?");
    $req_User_Exist->execute(array($idOfEvent));
    if ($req_User_Exist->rowCount() > 0) {
        $UserInfos = $req_User_Exist->fetch();
        if ($_SESSION['role']=="admin") {
            $deleteEvent = $mysql->prepare("DELETE FROM evenement WHERE id=?");
            $deleteEvent->execute(array($idOfEvent));
            // $deleteUser = $mysql->prepare("DELETE FROM Articles WHERE ID_User=?");
            // $deleteUser->execute(array($idOfEvent));
            echo "Event supprimé";
                header('Location:../../views/backOffice.php?id=evenement');
            
        } else {
            echo "Aucun Event trouvé";
            // $errorMsg = "Vous n'avez pas le droit pour modifier cet User";
        }
    }else{
        echo "Cet Event n'existe pas ou a été supprimé"; 
    }
} else {
    echo "Aucun Event trouvé";
}