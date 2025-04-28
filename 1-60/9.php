<?php

$num1 = 0;

$num2 = 1;

if ($num1 == $num2 || $num2 < 3){
    echo "true"."</br>";
}

if ($num1 == $num2 && $num2 < 3){
    echo "true"."</br>";
}

if (!($num1 == $num2) && $num2 < 3){
    echo "true"."</br>";
}