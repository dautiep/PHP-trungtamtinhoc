<?php
	$mang1 = array(1,2,3,4,5,6);
	$tong=0;
	for ($i=0; $i <=count($mang1) ; $i++) { 
		$tong +=$i;
	}
	echo 'Giá trị tổng của các phần tử trong mảng là: '.$tong.'<br>';

	$tong2=0;
	foreach ($mang1 as $value) {
		$tong2+=$value;
	}
	echo 'giá trị của tổng các phần tử trong mảng được duyệt bằng vòng lặp foreach là: '.$tong2.'<br>';

	$mang2 = array('maso'=>'MS001', 'hoten'=>'Nguyen Thi Nho');
	foreach ($mang2 as $key => $value) {
		echo '<br> Key -> Value của từng phần tử trong mảng là <br>';
		echo 'key= '.$key.',    value= '. $value.'<br>';
	}
	$mang2['hoten']='Nguyen Thi Lon';
	foreach ($mang2 as $key => $value) {
		echo 'hoten sau khi cap nhat '.$mang2['hoten'].'<br>';
		break;
	}
	$mang2['tuoi']='20';
	foreach ($mang2 as $key => $value) {
		echo 'key= '.$key.',    value= '. $value.'<br>';
	}

	echo '<br><br>';
	$hoten  = 'Nguyễn Hà';
	$arrHo_Ten = explode(" ", $hoten);
	print_r($arrHo_Ten);

	if(count($arrHo_Ten) == 1)
		echo '<br>Bạn ấy tên: '.$hoten;
	elseif(count($arrHo_Ten) == 2)
		echo '<br>Bạn ấy họ: '.$arrHo_Ten[0].'<br>Tên: '.$arrHo_Ten[1];
	else{
		echo '<br>Bạn ấy họ: '.$arrHo_Ten[0];
		echo '<br>Tên đệm: ';
		for ($i = 1; $i < count($arrHo_Ten) - 1; $i++) { 
			echo $arrHo_Ten[$i]. ' ';
		}
		echo '<br>Tên: '.$arrHo_Ten[count($arrHo_Ten) - 1];
	}
?>