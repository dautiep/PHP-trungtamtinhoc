<?php
interface HINH{
	// Khai báo phương thức trừu tượng
 		function Dien_tich();
 		function Chu_vi();
}
class HINH_CHU_NHAT implements HINH{
	// Khai báo thuộc tính
	var $cDai;
	var $cRong;
	// Khai báo phương thức khởi tạo
	public function __construct($d,$r){
		$this->cDai=$d;
		$this->cRong=$r;	
    }
  public function Dien_tich(){
		return $this->cDai * $this->cRong;
	}
	public function Chu_vi(){
		return ($this->cDai + $this->cRong)*2;
    }
  public  function Thong_tin(){
		return " Hình Chữ Nhật";	
	}
}
?>

