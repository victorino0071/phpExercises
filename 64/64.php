<?php

$file = "./text.txt";

if(file_exists($file)){
    $handleRead = fopen($file, "r");
    $readText = fread($handleRead, filesize($file));
    echo $readText;
}else{
    echo "Erro, o arquivo não existe";
}