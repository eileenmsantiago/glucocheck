<?php 

    include("include/connect.php");

    $stmt = $pdo->prepare("SELECT * FROM `users`");
    $stmt->execute();


    // while($row = $stmt->fetch()) {
    //    echo($row["id"]);
    //    echo($row["fname"]);
    //    echo($row["lname"]);
    //    echo($row["fname"]);
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/index.css">
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/bottomBar.css">
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <section class="hero-container">
            <div class="gc-container">
                <div class="hero-content">
                    <h1>The place to track your diabetes data</h1> 
                    <p> 
                        With GlucoCheck, input your blood glucose levels, monitor and learn from them. 
                    </p>
                    <!-- <a class="button_link_root" href="/glucocheck/login.php"> </a> -->
                    <a class="gc-button gc-button-type-primary" aria-label="hero button" href="/glucocheck/signup.php">
                    Get Started
                        <!-- <span class="gc-button-content">Get Started</span> -->
                        <!-- <button class="gc-button gc-button-primary">GET STARTED
                        </button> -->
                    </a>
                </div>
            </div>
        </section>
        <section class="gc-container gc-container-full">
            <div class="content-wrapper">
                <h2 class="gc-header">Make a big impact on how you control your diabetes</h2>
                <p class="gc-p">
                GlucoCheck is a resourceful tool to view your blood glucose trends. Helping you to understand where during the day are you high and low points. Allowing you to make the right insulin adjustments.  It’s the kind of extra help any diabetic needs to optimize a controlled glucose level. 
                </p>
            </div>
        </section>
        <section class="gc-container gc-container-three-cards">
                <h2 class="gc-header">How it works</h2>
                <div class="card-container-wrapper">
                    <div class="card-container-element">
                        <img src="/glucocheck/assets/image_card_girl.png" alt="illustration of a girl"></img>
                        <h4>Input your data</h4>
                        <p>Test your blood glucose level and input the data in your dashboard</p>
                    </div>
                    <div class="card-container-element">
                        <img src="/glucocheck/assets/image_card_graph.png" alt="illustration of a blue and green graph"></img>
                        <h4>View your blood glucose trends visually</h4>
                        <p>Test your blood glucose level and input the data in your dashboard</p>
                    </div>
                    <div class="card-container-element">
                        <img src="/glucocheck/assets/image_card_dr.png" alt="illustration of a female doctor"></img>
                        <h4>Easy to share with your health care provider </h4>
                        <p>Test your blood glucose level and input the data in your dashboard</p>
                    </div>
                </div>
        </section>
        <section class="gc-container gc-container-two-full">
            <h2 class="gc-header">Data-driven care for your diabetes</h2>

        </section>
        <section class="gc-container gc-container-form-center">
                <div class="gc-container-register">
                    <h2 class="gc-header">Have some questions?</h2>
                    <p class="gc-p">No worries. We'd be happy to help out. Leave us information and we'll be sure to get back to you!</p>
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
                        <button type="submit" id="submit" class="gc-button gc-button-type-secondary">Submit</button>
                    </form>
                </div>
        </section>
    </main>
    <div class="bottombar" data-bottombar="cookieMessage">
        <div class="bottombar__content">
            <div id="cookie_accept" class="bottombar__text">
                <p> We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies.</p>
                <a id="cookie_accept_btn" class="gc-button gc-button-type-secondary">Accept</a>
            </div>
            <div id="cookie_revoke" class="bottombar__text">
                <p> Cookies were accepted. Would you like to revoke?</p>
                <a id="cookie_revoke_btn" class="gc-button gc-button-type-secondary">Yes</a>
            </div>
            <button type="button" class="bottombar__close" data-bottombar-close="cookieMessage">
                &times;
            </button>
        </div>
    </div>
    <?php include("include/footer.php") ?>
    <script src="/glucocheck/js/index.js"></script>
</body>
</html>