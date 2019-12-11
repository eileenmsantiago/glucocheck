<?php           
    // addUser by receiving user variables from the `users` table
    include("../include/connect.php");
    
    //receive user variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $stmt = $pdo->prepare("INSERT INTO `users`
        (`id`,`fname`, `lname`,`email`, `password`) 
        VALUES (NULL, '$email', '$fname','$lname','$password');");

    $stmt->execute();

    header("Location:/glucocheck/signin.php");

?>