<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/dashboard.css">
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/entryForms.css">
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <section class="gc_container__hero">
            <div class="gc_container">
                
            </div>
        </section>
        <section class="gc_container__full">
            <div class="content_wrapper">
                <h2 class="gc-header">Make a big impact on how you control your diabetes</h2>
                <p class="gc-p">
                GlucoCheck is a resourceful tool to view your blood glucose trends. Helping you to understand where during the day are you high and low points. Allowing you to make the right insulin adjustments.  It’s the kind of extra help any diabetic needs to optimize a controlled glucose level. 
                </p>
            </div>
        </section>
        <section class="gc_container__three_cards">
            <div class="gc_container">
                <h2 class="gc-header">How it works</h2>
                <div class="gc_container__card_wrapper">
                    <div class="gc_container__card_element">
                        <img src="/glucocheck/assets/image_card_girl.png" alt="illustration of a girl"></img>
                        <h4>Input your data</h4>
                        <p>Test your blood glucose level and input the data in your dashboard</p>
                    </div>
                    <div class="gc_container__card_element">
                        <img src="/glucocheck/assets/image_card_graph.png" alt="illustration of a blue and green graph"></img>
                        <h4>View your blood glucose trends visually</h4>
                        <p>Test your blood glucose level and input the data in your dashboard</p>
                    </div>
                    <div class="gc_container__card_element">
                        <img src="/glucocheck/assets/image_card_dr.png" alt="illustration of a female doctor"></img>
                        <h4>Easy to share with your health care provider </h4>
                        <p>Test your blood glucose level and input the data in your dashboard</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gc_container__two_full">
            <div class="gc_container">
            <h2 class="gc-header">Data-driven care for your diabetes</h2>

            </div>
        </section>
        <section class="gc_container__form_center">
            <div class="gc_container">
                <div class="gc_container_register">
                    <h2 class="gc-header">Have some questions?</h2>
                    <p class="gc-p">No worries. We'd be happy to help out. Just leave us some information and we'll be sure to get back to you.</p>
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
                            type="text" 
                            placeholder="What's your question?" 
                            name="contactQuestion" 
                            required><br>
                        <button type="submit" id="submit" class="gc_button gc_button-type-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include("include/footer.php") ?>
    <script src="/glucocheck/js/dashboard.js"></script>
</body>
</html>