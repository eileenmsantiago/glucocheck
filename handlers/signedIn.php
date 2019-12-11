<?php
    // signedIn.php
    $email = $_POST['email'];
    $password = $_POST['password'];

    include('../include/connect.php');

    $stmt = $pdo->prepare("SELECT * FROM `users` 
        WHERE `email` = '$email'
        AND `password` = '$password'
        ");
    $stmt->execute();
    $row = $stmt->fetch();

    if($row) {
        session_start();
        $_SESSION['id'] = $row['id'];
    }
?>

<?php if ($row): 
    // header("Location:dashboard.php");
    header("Location:index.php");
?>
   
<?php endif; ?>
<?php if (!$row): ?>
    <p>There is no record with that username or password</p>
    <p> <a href="/glucocheck/signin.php">Sign in</a></p>
<?php endif; ?>