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


?>