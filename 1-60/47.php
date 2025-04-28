<?php

//ele considera acento como um caracter a ser contado no strlen, ou seja
//"Olá Mundo" produzirá o resultado "13" ao invés de "12"
$string = "Ola Mundo!!!";

$lenght = strlen($string);

print_r($lenght);