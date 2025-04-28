<?php

$victor = [
    "nome" => "Victor",
    "Altura" => 1.77,
    "sexo" => "M",
    "idade" => 19
];

foreach ($victor as $index => $value){
    echo "[".$index."] => ". $value."\n";
}

var_dump($victor);