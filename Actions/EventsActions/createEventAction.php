<?php
require('../Actions/database.php');
if(isset($_SESSION['role']) AND ($_SESSION['role']=="organisateur" or $_SESSION['role']=="admin")){
if (isset($_POST['submit'])){
    if(!empty($_POST['Title']) AND !empty($_POST['Description'])AND !empty($_POST['Date']) AND !empty($_POST['nbPlaces'])){
        $event_title=htmlspecialchars($_POST['Title']);
        $event_date=htmlspecialchars($_POST['Date']);
        $event_nbPlaces=htmlspecialchars($_POST['nbPlaces']);
        $event_desc=nl2br(htmlspecialchars($_POST['Description']));
        $req_Add_event = $mysql->prepare('INSERT INTO evenement(titre,description,dateEvent,nbrInscrit,nbPlaceMax,idUser) VALUES(?, ?, ?, ?, ?,?)');
        $req_Add_event->execute(array($event_title, $event_desc, $event_date,0,$event_nbPlaces,$_SESSION['id']));
        header('Location:index.php');
    }else{
        $errorMsg="Veuillez compléter tous les champs";
    }
}
}else{
    $error="Vous n'avez pas le droit à cette fonctionnalité";
}