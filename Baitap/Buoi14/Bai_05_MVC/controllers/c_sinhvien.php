<?php
include("models/m_sinhvien.php");
class C_sinhvien{
    function Hien_thi_Danh_sach_Sinhvien(){
        // Lấy dữ liệu từ Model
        $m_sinhvien=new M_sinhvien();
        $ds_Sinh_vien=$m_sinhvien->Doc_sinhvien();
        // Gọi view hiển thị
        include("views/v_ds_Sinh_vien.php");
    }
}
?>

