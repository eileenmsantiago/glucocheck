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
        <div class="nav_list_wrapper">
            <ul class="nav_list">
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
    </nav>
</header>
