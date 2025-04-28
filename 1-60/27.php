<?php

function funcaoGlobal($chamarFuncao = "nao"){
    function funcaoInterna(){
        echo "funcao interna \n";
    }

    if ($chamarFuncao == "sim"){
        funcaoInterna();
    }

    echo "funcao externa \n";
}

//funcaoInterna(); não é possivel chamar a funcao aqui fora 
funcaoGlobal();

//nao consigo chamar a funcao dnv