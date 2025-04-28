<?php

$string = "Sou apenas um victin a deriva";

if (str_contains($string, "victin")){
    echo "O victin está sim a deriva\n";
}

if(str_contains($string, "Victin")){
    echo "VICTÃO COM MAIUSCULO, FORTE VICTÃO";
}else{
    echo "Não há victin, apenas vazio";
}