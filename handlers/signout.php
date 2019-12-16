<?php
    session_start();
    session_destroy();
    header('Location: /glucocheck/index.php');
?>