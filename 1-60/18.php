<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

foreach ($arr as $index => $value){
    if ($value%3 == 0){
        continue;
    }
    echo $value."\n";
}