<?php
class PHUONG_TRINH_BAC_NHAT
{
	// Khai báo biến thuộc tính
	var $a;
	var $b;
	// Phương thức khởi tạo
	function __construct($a,$b)
	{
		$this->a=$a;
		$this->b=$b;	
	}
	// Phương thức tính toán
	function NGHIEM()
	{
		$nghiem="";
		if($this->a==0)
		{
			if($this->b==0)
			{
				$nghiem="Phương trình bậc nhất: Vô số nghiệm";	
			}
			else
			{
				$nghiem="Phương trình bậc nhất: Vô nghiệm";
			}
		}
		else
		{
			$nghiem=round(-$this->b/$this->a,2);	
		}	
		return $nghiem;
	}
		
}
?>