<?php
    function Loi_chao($ho_ten){
        return "Chao ban $ho_ten";
    }

    $ho_ten = "Nguyen Van A";
    print(Loi_chao($ho_ten));
    echo '<br>';
    echo $loi_chao = Loi_chao($ho_ten);
    echo '<hr>';

    function Tong_hai_so($a, $b){
        $tong = $a +$b;
        return $tong;
    }
    $s1 = 5;
    $s2 = 4;
    echo 'Tổng hai số là: '.$tong = Tong_hai_so($s1, $s2);
    echo '<hr>';

    function Tong_ba_so($a, $b, $c = 0){
        $tong1 = $a + $b + $c;
        return $tong1;
    }
    $s1 = 5;
    $s2 = 6;
    $s3 = 4;
    echo 'Tổng ba số khi truyền giá trị cho $c là: '.$tong_1 = Tong_ba_so($s1, $s2, $s3).'<br>';
    echo 'Tổng ba số khi không truyền giá trị cho $c là: '.$tong_1 = Tong_ba_so($s1, $s2);
    echo '<hr>';

    $a = 25;
    function Test(){
        // echo $a; phát sinh ra lỗi vì $a đang là biến toàn cục
        global $a;
        echo '$a = '.$a;
    }
    Test();
    echo '<hr>';

    function Tong(){
        $a = 0;
        $a++;
        echo '$a = '.$a.'<br>';
    }
    Tong(); // gọi lần đầu tiên $a = 1
    Tong(); // gọi lần thứ hai $a = 1
    echo '<hr>';

    function Tong_static(){
        static $a = 0;
        $a++;
        echo '$a = '.$a.'<br>';
    }
    Tong_static(); //goi lần đầu tiên $a = 1
    Tong_static(); //gọi lần thứ hai $a = 2
    Tong_static(); //gọi lần thứ ba $a = 3
    echo '<hr>';

    //Truyền tham trị và tham chiếu
    //Tham trị
    echo 'truyền tham trị <br>';
    function Hoan_vi($a, $b){ //truyền vào giá trị của $a và $b nên khi kết thúc hàm thì giá trị của hai biến vẫn được giữ nguyên
        $tam = $a;
        $a = $b;
        $b = $tam;
        echo 'Trong khi hoán vị: $a = '.$a.'  $b = '.$b.'<br>';    
    }
    $a = 100;
    $b = 200;
    echo 'Trước hoán vị: $a = '.$a.'  $b = '.$b.'<br>';
    Hoan_vi($a, $b);
    echo 'Sau hoán vị: $a = '.$a.'  $b = '.$b.'<br>';

    //Tham biến
    echo '<br> <br> truyền tham biến <br>';
    function Hoan_vi1(&$a, &$b){ //truyền vào địa chỉ của $a và $b nên khi kết thúc hàm giá trị của hai biến bị thay đổi theo
        $tam = $a;
        $a = $b;
        $b = $tam;
        echo 'Trong khi hoán vị: $a = '.$a.'  $b = '.$b.'<br>';    
    }
    $a = 100;
    $b = 200;
    echo 'Trước hoán vị: $a = '.$a.'  $b = '.$b.'<br>';
    Hoan_vi1($a, $b);
    echo 'Sau hoán vị: $a = '.$a.'  $b = '.$b.'<hr>';

    //Test các hàm cơ bản trong PHP
    echo 'Hàm pi:<br>';
    $r = 3;
    echo '$s = '.$s = pi() * pow($r, 2).'<br>';
    echo '$p = '.$p = 2 * pi() * $r;

    echo '<br><br>Hàm trị tuyệt đối:<br>';
    $r1 = -3;
    echo 'abs($r1) = '.abs($r1);

    echo '<br><br>Hàm làm tròn:<br>';
    $r2 = 2.3523;
    echo '$r2 = 2.3523 sau khi làm tròn là: '.round($r2, 2);

    echo '<br><br>Hàm phát sinh số ngầu nhiên:<br>';
    echo 'Số ngẫu nhiên trong [1, 100] là: '.rand(1, 100);

    echo '<br><br>Các hàm xử lí chuoi:<br>';
    $ten = 'Dau   Le Quoc  Tiep  ';
    echo '"    Dau   Le Quoc  Tiep  "sau khi được loại bỏ khoảng trắng thừa là: '.trim($ten).'<br>';
    echo 'Độ dài của $ten là: '.strlen($ten).'<br>';
    $ten1 = 'Dau';
    $vitri = strpos($ten, $ten1);
    if($vitri == false)
        echo 'Không tìm thấy';
    else
        echo 'Tìm thấy';

    //Bắt lỗi
    echo '<hr>';
    function inverse($x){
        if(!$x)
            throw new Exception("Devision by zero");
        return 1/$x;
    }
    try {
        echo inverse(5);
        echo inverse(0);
        echo 'end';
    } catch (Exception $e) {
        echo '<br>';
        echo $e->getMessage();
    }




?>