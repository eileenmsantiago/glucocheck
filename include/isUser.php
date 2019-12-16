<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $isUser = false;
    if(isset($_SESSION)) {
        if(isset($_SESSION['isUser'])){ 
            $isUser = true;
        }
    }
?>