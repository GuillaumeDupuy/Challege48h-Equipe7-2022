<?php

require('../Actions/database.php');

// Récupérer les evenements par défaut sans recherche
$getAllEvents = $mysql->query("SELECT *  FROM evenement ");
// Vérifier si une recherche a été rentrée par l'utilisateur
// if(isset($_GET['search']) AND !empty($_GET['search'])){
//     // La recherche
//     $usersSearch = $_GET['search'];

//     $getAllArticles = $mysql->query('SELECT articles.ID_User,ID_Article,Title,Description,Content,Date_Pub,Username
//     FROM articles 
//     INNER JOIN users ON articles.ID_User=users.ID_User 
//     WHERE Title LIKE "%'.$usersSearch.'%" ORDER BY Date_Pub DESC');   
// }