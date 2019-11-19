<?php 
    require_once('models/M_sinhvien.php');
    class C_sinhvien{
        //function
        function Danh_Sach_Sinh_Vien(){
            $m_sinh_vien = new M_sinhvien();
            $dssv = $m_sinh_vien->lay_Danh_Sach_SV();
            require_once('views/sinhvien/ds_sinhvien.php');
        }

        function Sinh_Vien(){
            $m_sinh_vien = new M_sinhvien();
            $masv = $_GET["masv"];
            $sinhvien = $m_sinh_vien->lay_Sinh_Vien_Theo_MaSV($masv);
            require_once('views/sinhvien/doc_sinhvien.php');
        }
    }
?>