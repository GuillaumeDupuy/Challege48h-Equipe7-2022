<?php
require('../Actions/database.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfContent = $_GET['id'];
    // $req_event_Exist = $mysql->prepare("SELECT * FROM events WHERE ID_event= ?");
    if($_GET['id']=="evenement"){
        $req_admin_content = $mysql->prepare("SELECT * FROM evenement");
        $req_admin_content->execute();
    }else{
        $req_admin_content = $mysql->prepare("SELECT * FROM utilisateurs WHERE id!=?");
        $req_admin_content->execute(array($_SESSION['id']));
    }
    
    
}else{
    header('Location: backOffice.php?id=evenement');
}
// Récupérer les evenements par défaut sans recherche
$getAllEvents = $mysql->query("SELECT *  FROM evenement ");
