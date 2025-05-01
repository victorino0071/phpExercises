<?php

$archive = './text.txt';


if ($handle = fopen($archive, 'r')){
    while (($row = fgets($handle)) == true){
        echo $row;
    }
    fclose($handle);
}else{
    echo "Não foi possivel abrir o arquivo";
}