<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/signup-signin.css">
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <section class="gc-container signIn-up-container">
            <div class="form-content-container">
                <div class="form-header">
                    <h2 class="gc-header">Contact Us. Our specialist will be in touch!</h2>
                    <p class="gc-text">A simplified way to visually see your glucose trends and share with your doctor</p>
                </div>
                <div class="user-input-container">
                    <form 
                        action="#" 
                        method="POST"
                        enctype="multipart/form-data"
                        class="register-form">
                        <label for="contactFullName">Full Name </label><br>
                        <input 
                            type="text" 
                            placeholder="Enter Full Name" 
                            name="contactFullName" 
                            required><br>
                        <label for="contactEmail">Email </label><br>
                        <input 
                            type="text" 
                            placeholder="Enter Email" 
                            name="contactEmail" 
                            required><br>
                        <label for="contactQuestion">Question </label><br>
                        <input 
                            class="question-input"
                            type="text" 
                            placeholder="What's your question?" 
                            name="contactQuestion" 
                            required><br>
                        <button type="submit" class="gc-button gc-button-type-secondary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- Sign up Confirmation Modal -->
            <div id="modal" class="modal"> 
                <div class="modal-box">
                    <span id="closeModal">&times;</span>
                    <p id="confirmText"></p>
                    <button id="confirmationBtn"></button>
                </div>
            </div>
            <div class="sign-image-container">
                <img src="assets/full-signup.svg">
            </div>
        </section>
    </main>
    <?php include("include/footer.php") ?>
    <script src="/glucocheck/js/signup.js" type="text/javascript"></script>
</body>
</html>


