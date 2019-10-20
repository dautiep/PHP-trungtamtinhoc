<?php
    session_start();
    session_destroy(); //xóa session
    setcookie('email', '', time() - (60 * 60 *24)); //xóa cookie 
    header('location:.'); //chạy domain của mình (ở đây là file index.php)
?>