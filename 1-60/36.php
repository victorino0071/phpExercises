<?php

$arr = [4,7,2,9,07,9,4,4,65,32,32,7,9,56,3,2];


function fatoriarPequeno($num){
    $result = 1;
    if ($num > 10){
        return 0;
    }else{
        for($i = 1; $i <= $num; $i++){
            $result = $result * $i;
        }
        return $result;
    }
}

print_r(array_map('fatoriarPequeno', $arr));