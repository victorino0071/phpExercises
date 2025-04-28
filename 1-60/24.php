<?php


function acharMaior(...$numbers){
    $num = 0;
    foreach($numbers as $value){
        if ($value > $num){
            $num = $value;
        }
    }
    return $num;
}


$maior = acharMaior(1,2,3,4,5,6,77,8,9);

echo $maior;