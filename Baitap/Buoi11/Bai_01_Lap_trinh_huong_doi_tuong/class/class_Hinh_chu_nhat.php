<?php
class HINH_CHU_NHAT
{
    //Khai báo biến thuộc tính: chiều dài, chiều rộng
    var $chieu_dai;
    var $chieu_rong;
    
    //Phương thức tính toán: Diện tích, Chu vi
    function tinhChuVi($cd, $cr){
        $this->chieu_dai = $cd;
        $this->chieu_rong = $cr;
        $p = ($cd + $cr) * 2;
        return $p;
    }
    
    function tinhDienTich($cd, $cr){
        $this->chieu_dai = $cd;
        $this->chieu_rong = $cr;
        $s = $cd * $cr;
        return $s;
    }
    


}
?>
