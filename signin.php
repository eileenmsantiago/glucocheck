<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signin</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/signup.css">
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <section class="signup_form_wrapper">
            <div class="gc_container">
                <div class="form_content__container">
                    <div class="signup_form_header">
                        <h2 class="gc-header">Keep up to date with your blood glucose levels</h2>
                        <p class="gc-p">An easy way to log in your glucose levels and stay on top of your diabetes management</p>
                    </div>
                    <div class="user-input__container">
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
                           
                            <button type="submit" id ="submit" class="gc_button gc_button-type-secondary">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("include/footer.php") ?>
    <!-- <script src="/glucocheck/js/signup.js" type="text/javascript"></script> -->
</body>
</html>


