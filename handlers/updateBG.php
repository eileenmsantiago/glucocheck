<?php
    include("../include/connect.php");
    
    $id = $_GET['id'];
    $level = $_POST['level'];
    $beforeAfter = $_POST['beforeAfter'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    
    $stmt = $pdo->prepare("UPDATE `bg` 
        SET `id`= '$id',`level`='$level',`beforeAfter`='$beforeAfter',`time`= '$time',`date`= '$date'
        WHERE `bg`.`id` = $id;");
    
    $stmt->execute(array(':level' => $level, ':beforeAfter' => $beforeAfter, ':time' => $time, ':date' => $date));
    
    // header("Location:/glucocheck/dashboard.php");
?>