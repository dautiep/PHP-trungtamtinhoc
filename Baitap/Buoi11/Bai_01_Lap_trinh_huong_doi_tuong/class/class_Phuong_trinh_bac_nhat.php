<?php
class PHUONG_TRINH_BAC_NHAT
{
	// Khai báo biến thuộc tính: hệ số a, hệ số b
	var $a;
	var $b;
	
	// Phương thức khởi tạo: __construct 
	function __construct($a, $b){
		$this->a = $a;
		$this->b = $b;
	}
	// Phương thức tính toán: NGHIEM
	function NGHIEM(){
		$kq = '';
		if($this->a == 0){
			if($this->b == 0)
				$kq = 'Phương trình có vô số nghiệm';
			else {
				$kq = 'Phương trình vô nghiệm';
			}
		}else 
			$kq = round((-$this->b / $this->a), 2);
		return $kq;
	}
		
}
?>
