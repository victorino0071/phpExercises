<?php

$file = "./text.txt";
$newfile = "./newtext.txt";

if (rename($file, $newfile)){
    echo "Renomeado o arquivo com sucesso";
}else{
    echo "Erro ao renomear o arquivo";
}