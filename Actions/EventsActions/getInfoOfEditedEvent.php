<?php
require('../Actions/database.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfEvents = $_GET['id'];
    $req_Event_Exist = $mysql->prepare("SELECT * FROM evenement WHERE id= ?");
    $req_Event_Exist->execute(array($idOfEvents));
    if ($req_Event_Exist->rowCount() > 0) {
        $EventInfos = $req_Event_Exist->fetch();
        if ((isset($_SESSION['role'] ) and $_SESSION['role']=="admin") or((isset($_SESSION['role'] ) and $_SESSION['role']=="organisateur") and $EventInfos['idUser'] == $_SESSION['id'])  ) {
            $Event_title=$EventInfos['titre'];
            $Event_desc=$EventInfos['description'];
            $Event_date=$EventInfos['dateEvent'];
            $event_nbPlaces=$EventInfos['nbPlaceMax'];
            $Event_desc=str_replace('<br />', '', $Event_desc);
            // $Event_content=str_replace('<br />', '', $Event_content);
        } else {
            $errorMsg = "Vous n'avez pas le droit pour modifier cet Event";
        }
    } else {
        $errorMsg = "Cet Event n'existe pas ou a été supprimé";
    }
} else {
    $errorMsg = "Aucune Event n'a été trouvée";
}