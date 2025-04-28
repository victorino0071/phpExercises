<?php

$arq = fopen("./text61.txt", "w");

$firstText = "Primeiro texto escrito";

$writeText = fwrite($arq, $firstText);

if ($writeText !== false ){
    echo "Texto escrito com sucesso";
}else{
    echo "Erro a escrever o texto";
}