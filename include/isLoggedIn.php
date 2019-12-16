<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $isLoggedIn = false;
    if(isset($_SESSION['id'])){ 
        $isLoggedIn = true;
    }
?>