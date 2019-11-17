<?php 
    require_once('XL_Ket_noi.php');
    $chuoiSQL = "INSERT INTO khoa(tenkhoa)
                VALUES('tự động hóa')";
    $cursor = $conn->exec($chuoiSQL);
    echo $cursor;
?>