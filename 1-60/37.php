<?php

$arr = [3,23,88,56,48,6,3,43,248,599,65,40];

function filtrarPares($num){
    return $num%2 == 0;
}

print_r(array_filter($arr, 'filtrarPares'));