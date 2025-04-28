<?php



function incrementar($num){
    $num ++;
    echo "Número dentro da funcao: ".$num."\n";
}

function incrementarComReferencia(&$num){
    $num ++;
    echo "Número dentro da funcao: ".$num."\n";
}

$num = 5;
incrementar($num);
echo "Número fora da funcao: ".$num."\n";

incrementarComReferencia($num);
echo "Número fora da funcao com referencia: ".$num."\n";