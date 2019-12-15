<?php 
    // connect.php

    $dsn = "mysql:host=localhost;dbname=santiaei_glucocheck;charset=utf8mb4";
    $dbusername = "santiaei_admin";
    $dbpassword = "GA47Y0;U}?kQ";

    $pdo = new PDO($dsn, $dbusername, $dbpassword); 

    try {
        $dbh = new PDO($dsn, $dbusername, $dbpassword);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>