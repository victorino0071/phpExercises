<?php

$arr = [1,2,3,4,5];



//Adiciona elementos ao final do array
array_push($arr, 2);

//adiciona elementos ao inicio do array
array_unshift($arr, 3, 6);

//Preenche um array até um tamanho especifico, não modifica o original
$newArray = array_pad($arr, 10, 0);

//remove o ultimo elemento do array
array_pop($arr);

//remove o primeiro elemento do array
array_shift($arr);

//Remove um elemento de uma chave especifica
unset($arr[3]);




print_r($arr);
//print_r($newArray);