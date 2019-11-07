<?php
require_once("class_Phuong_trinh_bac_nhat.php");
class PHUONG_TRINH_BAC_HAI extends PHUONG_TRINH_BAC_NHAT
{
	// Khai báo biến thuộc tính
	var $c;
	// Phương thức khởi tạo
	function __construct($a,$b,$c) // ax2 + bx + c = 0
	{
		parent::__construct($a,$b);
		$this->c=$c;
	}
	// Phương thức tính toán
	function NGHIEM()
	{
		$nghiem="";
		if($this->a==0)
		{
			// Giải phương trình bậc 1
			parent::__construct($this->b,$this->c);
			$nghiem=parent::NGHIEM();
			return $nghiem;
		}
		else
		{
			$denta=pow($this->b,2)- (4*$this->a * $this->c);
			if($denta==0)
			{
				// Nghiệm kép
				$x=-$this->b/(2*$this->a);
				$nghiem="Phương trình có nghiệm kép:X1=X2= " . round($x,2);
			}
			elseif($denta>0)
			{
				$x1=(-$this->b + sqrt($denta))/ (2*$this->a);
				$x2=(-$this->b - sqrt($denta))/ (2*$this->a);
				$nghiem="Phương trình có hai nghiệm phân biệt X1=$x1 - X2=$x2";
				
				
			}
			else // Âm
			{
				$nghiem="Phương trình bậc hai: Vô nghiệm";
			}
		}
		return $nghiem;
		
	}
}
?>
