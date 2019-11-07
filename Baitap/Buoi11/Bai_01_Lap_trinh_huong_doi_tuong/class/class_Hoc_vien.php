<?php
class HOC_VIEN
{
    //Khai báo biến thuộc tính: Họ tên, Mã học viên, Giới tính, Ngày sinh
    var $ho_ten;
    var $ma_hoc_vien;
    var $gioi_tinh;
    var $ngay_sinh;
    
    //Phương thức tính toán: Thông tin học viên
    function thong_tin_hoc_vien(){
        $thong_tin = "Mã học viên: $this->ma_hoc_vien | Họ tên: $this->ho_ten | Giới tinh: $this->gioi_tinh | Ngày sinh: $this->ngay_sinh";
        return $thong_tin;
    } 
    
}
?>

