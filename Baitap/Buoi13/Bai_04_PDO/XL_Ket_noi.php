<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $myDB = 'ql_sinh_vien';
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $ds_Sinh_vien=array();
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password, $option);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select sv.*,tenkhoa from sinhvien sv inner join khoa k on sv.makhoa=k.makhoa";
        $sta = $conn->prepare($sql);
        $sta->execute();
        $ds_Sinh_vien = $sta->fetchAll(PDO::FETCH_OBJ); //trả về kết quả là một mảng các đối tượng
    } catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
    }
?>
