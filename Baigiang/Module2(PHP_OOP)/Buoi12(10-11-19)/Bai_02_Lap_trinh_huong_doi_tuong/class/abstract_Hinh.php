<?php
abstract class HINH
{
  // Khai báo phương thức trừu tượng
  abstract function Dien_tich();
  abstract function Chu_vi();
  // Phương thức cụ thể
  public  function Thong_tin()
  {
    return "Hình:  ";
  }
}


class HINH_CHU_NHAT extends HINH{
  // Khai báo thuộc tính
  var $cDai;
  var $cRong;
  // Khai báo phương thức khởi tạo
  public function __construct($d, $r){
    $this->cDai = $d;
    $this->cRong = $r;
  }
  public function Dien_tich(){
    return $this->cDai * $this->cRong;
  }
  public function Chu_vi(){
    return ($this->cDai + $this->cRong) * 2;
  }
  public  function Thong_tin(){
    return parent::Thong_tin() . " Chữ Nhật  ";
  }
}

 