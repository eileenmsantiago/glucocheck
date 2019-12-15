<?php           
    // addUser by receiving user variables from `users` table
    include("../include/connect.php");
    
    //receive user variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo($password);
    echo($fname);
    echo($lname);
    echo($email);

    // $stmt = $pdo->prepare("INSERT INTO `users` (`userID`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES (NULL, '$firstname', '$lastname', '$email', '$password', '$role')");

    $stmt = $pdo->prepare("INSERT INTO `users`(`id`, `fname`, `lname`, `email`, `password`) VALUES (NULL, '$fname', '$lname', '$email', '$password')");

    $stmt->execute();

    echo('{"success":true}');


    // header("Location:/glucocheck/signin.php");
?>