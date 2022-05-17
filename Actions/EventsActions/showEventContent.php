<?php
require('../Actions/database.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfEvent = $_GET['id'];
    // $req_event_Exist = $mysql->prepare("SELECT * FROM events WHERE ID_event= ?");
    $req_event_Exist = $mysql->prepare("SELECT * FROM evenement WHERE id= ?");
    $req_event_Exist->execute(array($idOfEvent));
    if ($req_event_Exist->rowCount() > 0) {
        $eventInfos = $req_event_Exist->fetch();
        $event_title = $eventInfos['titre'];
        $event_desc = $eventInfos['description'];
        $event_Date_Event = $eventInfos['dateEvent'];
        $event_Remaining_Places=$eventInfos['nbPlaceMax']-$eventInfos['nbrInscrit'];
    }else{
        $errorMsg= "Cet event n'existe pas ou a été supprimé"; 
    }
}else{
    $errorMsg= "Aucun event trouvé";
}