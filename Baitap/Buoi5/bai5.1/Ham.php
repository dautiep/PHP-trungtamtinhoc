<?php 
    function tongHaiSo($a, $b){
        return $a + $b;
    }

    function kt_chanle($a){
        if($a % 2 == 0)
            return true;
        return false;
    }

    function giai_ptbac2($a, $b, $c, &$pt){
        echo $a;
        echo $b;
        echo $c;
        if($a == 0){
            $pt = $b.'*x + '.$c.' = 0';
            $kq = 'x = '.-$b/$c;
            return $kq;
        }else {
            $pt = $a.'*x2 +'.$b.'*x + '.$c.' = 0';
            echo $delta = pow($b, 2) - 4*$a*$c;
            //nếu delta > 0
            //pt có 2 nghiệm phân biệt x1 = (-b+sqrt(delta))/2*a, x2 = (-b-sqrt(delta))/2*a
            if($delta > 0){
                $kq = 'Hai nghiệm phân biệt: x1 = '.(-$b + sqrt($delta))/(2*$a).'  x2 = '.(-$b - sqrt($delta))/(2*$a);
                return $kq;
            }elseif($delta == 0){
                $kq = 'Nghiệm kép x = '.-$b/(2*$a);
                return $kq;
            }elseif($delta < 0){
                $kq = 'Phương trình vô nghiệm';
                return $kq;
            }
        }
    }
?>