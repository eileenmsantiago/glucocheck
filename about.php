<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/about.css">
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <div class="gc-container about-container">
            <div class="about-main-content-container">
                <div class="gc-heading">
                    <h1 style="text-align: center; font-size: 1rem; font-family:'PT Serif', serif;">About</h1>
                </div>
                <div class="gc-heading">
                    <h2 style="text-align: center;">
                    Data can give you power. 
                    </h2>
                </div>
            </div>
            <div class="gc-container about-body-content-container">
                <img src="/glucocheck/assets/doctor.svg"/>
                <div class="body-content gc-container">
                    <div class="content-padding">
                        <h2 class="gc-heading">
                            The kind of best friend you've always needed
                        </h2>
                        <p class="gc-text"> The key in managing your diabetes is to keep your blood sugar under control, exercise, and eat right. 
                            GlucoCheck is a tracker that can give you an accurate feedback about how much, or how little, you are doing those things. 
                            By getting an accurate view of your blood sugar along with how much you're exercising, eating, and sleeping — you can make some real improvements.</p>
                    </div>
                </div>
                <div class="body-content-right gc-container">
                    <div class="content-padding">
                    <img src="/glucocheck/assets/graph.svg"/>
                        <p id="gc-para-header" style="text-align: right;">Data = power.</p>
                        <p class="gc-text" style="text-align: right; padding-bottom: 100px;">Research shows that tracking — and the awareness that comes with it — really works. Studies have found that people with diabetes who used apps — to record food, exercise, and other behavior -- had better long-term blood sugar control. </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("include/footer.php") ?>
    <script src="/glucocheck/js/dashboard.js"></script>
</body>
</html>