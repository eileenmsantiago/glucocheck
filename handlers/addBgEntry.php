<?php
    session_start();
    include("../include/connect.php");

    $userID = $_SESSION['id'];
    $level = $_POST['level'];
    $beforeAfter = $_POST['beforeAfter'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    $bgEntry = $pdo->prepare("INSERT INTO `bg`(`id`, `level`, `beforeAfter`, `time`, `date`, `userID`) 
        VALUES (NULL, '$level', '$beforeAfter', '$time', '$date', '$userID')");
    $bgEntry->execute();

    header("Location:/glucocheck/dashboard.php");
?>