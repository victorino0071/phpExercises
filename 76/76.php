<?php

session_start();

$_SESSION['usuarioId'] = 4586;
$_SESSION['idade'] = 20;
$_SESSION['nome'] = 'Maria';

if(isset($_SESSION['usuarioId'])){
    echo "ID do usuario é: ".$_SESSION['usuarioId']."</br>";
}

if(isset($_SESSION['idade'])){
    echo "ID do usuario é: ".$_SESSION['idade']."</br>";
}


if(isset($_SESSION['nome'])){
    echo "ID do usuario é: ".$_SESSION['nome']."</br>";
}

print_r($_SESSION);