<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signin</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/signup-signin.css">
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <section class="gc-container signIn-up-container">
            <div class="form-content-container">
                <div class="form-header">
                    <h2 class="gc-header">Keep up to date with your blood glucose levels</h2>
                    <p class="gc-p">An easy way to log in your glucose levels and stay on top of your diabetes management</p>
                </div>
                <div class="user-input-container">
                    <form 
                        action="handlers/signedIn.php"
                        method="POST"
                        enctype="multipart/form-data"
                        class="register-form">
                        <label for="email">Email: </label><br>
                        <input 
                            type="text" 
                            placeholder="Your email address" 
                            name="email" 
                            required><br>
                        <label for="password">Password: </label><br>
                        <input 
                            type="password" 
                            placeholder="Your password" 
                            name="password" 
                            minlength="8"
                            required><br>
                        <button type="submit" id ="submit" class="gc-button gc-button-type-secondary">Sign In</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include("include/footer.php") ?>
    <!-- <script src="/glucocheck/js/signup.js" type="text/javascript"></script> -->
</body>
</html>


