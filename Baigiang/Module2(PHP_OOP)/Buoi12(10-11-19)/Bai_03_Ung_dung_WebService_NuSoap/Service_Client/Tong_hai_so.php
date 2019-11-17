<?php 
    require_once('nuSoap/nusoap.php');
    $namespace = "http://localhost/PHP_KHTN/Baigiang/Module2(PHP_OOP)/Buoi12(10-11-19)/Bai_03_Ung_dung_WebService_NuSoap/Service_Server/service.php";
    $client = new nusoap_client($namespace);

    $client->soap_defencoding = 'UTF-8';
    $client->decode_utf8 = false;
    $mang = array('a' => 5, 'b' => 8);
    $Tong = $client->call('TongHaiSo', $mang);
    echo $Tong; 
?>