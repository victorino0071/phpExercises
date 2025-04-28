<?php

$string = "Hello bro";
$string2 = "hello bro";

if (strcmp($string, $string2) == 0){
    echo "Strings de tamanhos iguais mesmo sendo case sensitive\n";
}else if (strcasecmp($string, $string2) == 0){
    echo "String iguais não sendo case sensitive";
}else{
    echo "Não sao iguais nem fudendo";
}