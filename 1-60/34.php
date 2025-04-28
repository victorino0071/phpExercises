<?php

$numeros = [4,8,2,4,0,5];
$strings = ["a", "zebra", "joia","bola", "terra", "porta"];


sort($numeros);
sort($strings);

print_r($numeros);
print_r($strings);


rsort($numeros);
rsort($strings);

print_r($numeros);
print_r($strings);