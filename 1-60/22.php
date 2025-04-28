<?php

function primo($num){
    $isPrimo = true;
    for ($i = 2; $i < $num; $i++){
        if ($num%$i == 0){
            $isPrimo = false;
            return $isPrimo;
        }
    }
    return $isPrimo;
}

$num = 178;

echo primo($num);