<?php

$arr = [32,1,2,4,677,95,3,1];

function doCount($result, $item){
    return $result += $item;
}


print_r(array_reduce($arr2, 'doCount'));
