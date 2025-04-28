<?php


function funcaoGlobal($chamarInterno = 0){
    $closure = function(){
        echo "Isso aqui é uma closure \n";
    };

    if ($chamarInterno == 1){
        $closure();
    }
    echo "Isso aqui é uma funcao global \n";
}

funcaoGlobal();
funcaoGlobal(1);
//não consigo chamar o $closure();
