<?php

    include("../include/connect.php");
    include("../include/isLoggedIn.php");
    
    $id = $_GET['id'];

    if(!$isLoggedIn) {
        header("Location:/glucocheck/index.php");
    } else {

        $stmt = $pdo->prepare("DELETE FROM `bg` WHERE `bg`.`id` = $id;");
        $stmt->execute();

        header("Location:/glucocheck/dashboard.php");
    }
?>