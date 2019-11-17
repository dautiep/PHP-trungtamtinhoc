<?php 
    require_once('XL_Ket_noi.php');
    $chuoiSQL = "SELECT *
                FROM `khoa`";
    $cursor = $conn->query($chuoiSQL);
    foreach($cursor as $item){
        print_r($item['tenkhoa']);
        echo '<br>';
    }
?>