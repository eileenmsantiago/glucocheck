<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/signup-signin.css">
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <section class="gc-container signIn-up-container">
            <div class="form-content-container">
                <div class="form-header">
                    <h2 class="gc-header">Start tracking your blood glucose levels</h2>
                    <p class="gc-p">A simplified way to visually see your glucose trends and share with your doctor</p>
                </div>
                <div class="user-input-container">
                    <form 
                        class="register-form"
                    >
                        <label for="fname">First Name: </label><br>
                        <input 
                            type="text" 
                            placeholder="Your first name" 
                            name="fname" 
                            required><br>
                        <label for="lname">Last Name: </label><br>
                        <input 
                            type="text" 
                            placeholder="Your last name" 
                            name="lname" 
                            required><br>
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
                        <span class="terms-container">
                            <input type="checkbox" name="checkbox" value="check" id="terms"/> I have read and agree to the Terms and Conditions and Privacy Policy
                        </span>
                        <button type="button" id ="submitButton" onclick="processSignup();" class="gc-button gc-button-type-secondary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- Confirmation Modal -->
            <div id="modal" class="modal"> 
                <div class="modal-box">
                    <span id="closeModal">&times;</span>
                    <p id="confirmText"></p>
                    <button id="confirmationBtn"></button>
                </div>
            </div>
        </section>
    </main>
    <?php include("include/footer.php") ?>
    <script src="/glucocheck/js/signup.js" type="text/javascript"></script>
</body>
</html>


