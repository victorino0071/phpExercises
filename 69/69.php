<?php

$contadorArquivo = './contador.txt';

$handleContador = fopen($contadorArquivo, 'r+');

if(filesize($contadorArquivo) == 0){
    fwrite($handleContador, '1');
    rewind($handleContador);
    echo fread($handleContador, filesize($contadorArquivo));
    fclose($handleContador);
}else{
    $IntNumber = (int) fread($handleContador, filesize($contadorArquivo));
    $IntNumber = ++$IntNumber;
    $stringNumber = (string) $IntNumber;
    rewind($handleContador);
    fwrite($handleContador, $stringNumber);
    rewind($handleContador);
    echo fread($handleContador, filesize($contadorArquivo));
    fclose($handleContador);
}