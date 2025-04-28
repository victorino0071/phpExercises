<?php

$arr = [2, 8, 9, 0, 5, 7, 1];


foreach ($arr as $index => $value){
    if ($value == 5){
        echo "Valor 5 achado";
        break;
    }
    echo "Index:". $index." Valor:".$value."\n";
}