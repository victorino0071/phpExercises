<?php

$arr1 = [0,1,2,3,4,5,6,7,8,9,10];
$arr2 = [5,6,7,8,9,10,11,12,13,11=>14,12=>15];


$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

$arr4 = $arr1 + $arr2;
print_r($arr4);