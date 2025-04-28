<?php

$file = "./text.txt";
$newfile = "./destination/text.txt";

if (copy($file, $newfile)){
    echo "copiado com sucesso";
}else{
    echo "Não foi possivel copiar";
}