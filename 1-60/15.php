<?php

do {
    echo "Digite algo (digite 'sair' se deseja sair):";
    $input = trim(fgets(STDIN));
    echo "Você digitou: ".$input."\n";
}while($input != "sair");