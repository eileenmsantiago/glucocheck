<?php
    $id = $_GET['id'];

    include("../include/connect.php");
    
    $stmt = $pdo->prepare("DELETE FROM `bg`
        WHERE `bg`.`id` = $id;");

    $stmt->execute();

    header("Location:/glucocheck/dashboard.php");
?>