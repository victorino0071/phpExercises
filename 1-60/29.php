<?php

function retornaQuadrado($num){
    return $num * $num;
}

$arr = [2, 6, 10, 68, 90, 23, 7];

print_r(array_map('retornaQuadrado', $arr));


function retornaImpar($num){
    return $num%2 != 0;
}

print_r(array_filter($arr,'retornaImpar'));