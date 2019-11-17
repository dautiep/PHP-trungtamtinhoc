<?php 
    class Phuong_Trinh_Bac_Nhat(){
        //thuộc tính
        var $b;
        var $c;
        //phương thức
        function __constructor($b, $c){
            $this->b = $b;
            $this->c = $c;
        }

        function Nghiem(){
            $nghiem = '';
            if($this->a == 0){
                if($this->b == 0) ? $nghiem = 'Phương trình có vô số nghiệm' : $nghiem = 'Phương trình vô nghiệm';
            }
        }
    }
?>