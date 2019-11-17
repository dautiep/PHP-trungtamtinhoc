<?php
    declare(strict_types = 1);
    function AddFloats(float $a, float $b): int{
        return $a + $b;
    }
    
    echo AddFloats(2, '3').'<br>';
    
    //chế độ coercive
    function sum(int ...$ints){
        return array_sum($ints);
    }
    print(sum(2, '5', 1));
    echo '<br>';
    
    //chế độ strict
    
    print(sum(2, 5, 1));
?>