<?php


function calcularPositivo($num){
    if($num < 0){
        throw new Exception("Número negativo");
    }
    return $num + 2;
}


try{
    echo calcularPositivo(2). "\n";
    echo calcularPositivo(-8). "\n";
    echo calcularPositivo(0). "\n"; //nao é calculado pois deu erro antes
    
}catch(Exception $e){
    echo "Error message: ". $e -> getMessage(). "\n";
}