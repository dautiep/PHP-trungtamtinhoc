<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $myDB = 'ql_sinh_vien';
    $option=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    try {
        $conn= new PDO("mysql:host=$servername;dbname=$myDB",$username,$password,$option);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
?>