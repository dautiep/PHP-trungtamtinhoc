<?php
    session_start();
    session_destroy();
    setcookie('email', '', time() - (60 * 60 * 24));
    header('location: index.php');
?>