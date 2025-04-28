<?php

$table = "./table.txt";

$handleTable = fopen($table, "r");

if ($handleTable){
    while(($row = fgets($handleTable)) !== false){
        $row = trim($row);
        $dados = explode(',', $row);
        print_r($dados);
    }
    fclose($handleTable);
}else{
    echo "Não foi possivel abrir o arquivo";
}