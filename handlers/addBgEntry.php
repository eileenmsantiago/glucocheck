<?php 
    include("../include/connect.php");

    $level = $_POST['level'];
    $beforeAfter = $_POST['beforeAfter'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    $bgEntry = $pdo->prepare("INSERT INTO `bg`(`id`, `level`, `beforeAfter`, `time`, `date`) 
        VALUES (NULL, '$level', '$beforeAfter', '$time', '$date')");
    $bgEntry->execute();

    header("Location:/glucocheck/dashboard.php");

    echo('{"success":true}');
?>