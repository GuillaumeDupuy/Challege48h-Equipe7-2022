<?php
$mysql = new PDO('mysql:host=localhost;dbname=conference;charset=utf8;', 'root', ''); 

// PHP Data Objects(PDO) Sample Code:
// try {
//     $conn = new PDO("sqlsrv:server = tcp:challenge48h-database.database.windows.net,1433; Database = challenge48h-database", "guillaume", "Justinou93__");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $e) {
//     print("Error connecting to SQL Server.");
//     die(print_r($e));
// }

// // SQL Server Extension Sample Code:
// $connectionInfo = array("UID" => "guillaume", "pwd" => "Justinou93__", "Database" => "challenge48h-database", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
// $serverName = "tcp:challenge48h-database.database.windows.net,1433";
// $conn = sqlsrv_connect($serverName, $connectionInfo);
?>
