<?php           
    // addUser by receiving user variables from `users` table
    include("../includes/connect.php");
    
    //receive user variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $pdo->prepare("INSERT INTO `users`
        (`id`, `email`, `password`, `role`, `fname`, `lname`) 
        VALUES (NULL,'$username', '$email', '$password','$role','$fname','$lname',);");

    $stmt->execute();

    header("Location:/glucocheck/signin.php");

?>