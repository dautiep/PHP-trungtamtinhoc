<?php
    require_once('models/m_khoa.php');
    class C_khoa{
        //function
        function hien_Thi_DS_Khoa(){
            //lấy dữ liệu từ model
            $m_khoa = new M_khoa();
            $ds_khoa = $m_khoa->Doc_khoa();
            //đổ dữ liệu lên view
            require_once('views/v_ds_khoa.php');
        }
    }
?>

