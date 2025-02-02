<?php 

    // dashboard.php
    session_start();
    include("../include/connect.php");

    $userID = $_SESSION['id'];
    
    // Receives the blood glucose levels ('level') from the 'bg' table
    $bgStmt = $pdo->prepare("SELECT * FROM `bg` WHERE `userID` = '$userID'");
    $bgStmt->execute();

    $bgDataList = array();
    while($row = $bgStmt->fetch()) {
        $level = (float)$row["level"];

        $bgRow = array(
            "id" => (int)$row["id"],
            "level" => $level,
            "beforeAfter" => $row["beforeAfter"],
            "time" => $row["time"],
            "date" => $row["date"],
        );

        if($level >= 14) {
            $bgRow["statusColor"] = "red";
        } else if ($level < 14 && $level >= 10 ) {
            $bgRow["statusColor"] = "yellow";
        } else {
            $bgRow["statusColor"] = "green";
        }
        $bgDataList[] = $bgRow;
    }
    echo json_encode($bgDataList);

?>
