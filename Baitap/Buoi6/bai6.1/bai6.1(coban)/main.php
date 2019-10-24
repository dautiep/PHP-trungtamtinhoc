<?php
    session_start();
    if(isset($_SESSION['email']))
        $email = $_SESSION['email'];
    else
        header('location: index.php');
?>
<!doctype html>
<html lang="en">
    <!--Phần head-->
    <?php require_once '../layout/head.php'; ?>
    <body>
        <!--Phần nav-->
        <?php require_once '../layout/nav.php'; ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php require_once '../layout/script.php'; ?>
    </body>
</html>