<?php 
    $var = function(){
        return 'I am a '.func_get_arg(1); //func_get_arg(i): lấy tham số thứ (i)
    };
    print_r($var('Closure', 'Tiep'));
    echo '<br>';

    $array = array('Ruby', 'PHP', 'JavaScript', 'HTML');
    array_walk($array, function(&$v, $k){
        $v = $v. '- Programming Language';
    });
    print_r($array);

?>