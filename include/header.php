<?php 
    include("isLoggedIn.php");
?>
<header> 
    <nav class="gc-container">
        <a href="/glucocheck/index.php">
            <img
                src="/glucocheck/assets/logo_main.svg"
                alt="red rounded rectangle with white text logo"
            >
        </a>
        <div class="nav-list-wrapper">
            <ul class="nav-list">
                <li><a href="/glucocheck/about.php">How We Work</a></li>
                <?php if ($isLoggedIn): ?>
                    <li>
                        <a class="icon-user" href="dashboard.php"></a>
                    </li>
                    <li><a href="/glucocheck/handlers/signout.php">Sign Out</a> </li>
                <?php endif; ?>
                <?php if(!$isLoggedIn):?>
                    <li><a href="/glucocheck/signin.php">Sign In</a></li>
                    <li>
                        <a 
                            class="gc-button gc-button-type-primary" 
                            aria-label="nav button" 
                            href="/glucocheck/signup.php">
                                Get Started
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="hamburger-menu">
            <label for="toggle" onclick="showHam()">&#9776;</label>
            <section id="hamMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if ($isLoggedIn): ?>
                    <li>
                        <a class="icon-user" href="dashboard.php"></a>
                    </li>
                    <li><a href="/glucocheck/handlers/signout.php">Sign Out</a> </li>
                <?php endif; ?>
                <?php if(!$isLoggedIn):?>
                    <li><a href="/glucocheck/signin.php">Sign In</a></li>
                    <li>
                        <a href="/glucocheck/signup.php">Get Started
                        </a>
                    </li>
                <?php endif; ?>
            </section>
        </div>
    </nav>
</header>
