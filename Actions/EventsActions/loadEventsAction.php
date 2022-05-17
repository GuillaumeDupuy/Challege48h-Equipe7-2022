<?php
if (!isset($_SESSION['auth'])){
    session_start();
    }
require('../Actions/database.php');

// Récupérer les evenements par défaut sans recherche
$getAllEvents = $mysql->query("SELECT *  FROM evenement");
// Vérifier si une recherche a été rentrée par l'utilisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){
    // La recherche
    $eventSearch = $_GET['search'];
    $getAllEvents = $mysql->query('SELECT *  FROM evenement WHERE titre LIKE "%'.$eventSearch.'%"');   
}