<?php
    //Ví dụ về bindTo trong PHP7
    $ho_ten = function(){
        return $this->Ho_ten;
    };

    class Hoc_vien{
        private $Ho_ten = 'Đậu Lê Quốc Tiếp';
    }
    $doi_tuong_hoc_vien = new Hoc_vien();
    $lay_ho_ten = $ho_ten->bindTo($doi_tuong_hoc_vien, 'Hoc_vien');
    echo $lay_ho_ten();

    //Ví dụ call
    echo '<br>';
    $gtTra_ve = $ho_ten->call(new Hoc_vien());
    echo $gtTra_ve;

    //kết hợp giữa closure và anonymous class
    $gtri = $ho_ten->call(new class{
        var $Ho_ten = 'Đậu Lê Quốc Tiếp';
    });
    echo '<br>'.$gtri;
?>