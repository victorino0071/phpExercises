<?php

session_start();

$_SESSION = array();

if (session_destroy()){
    echo "dados destruidos com sucesso </br>";

    //esse if nunca será executado
    if (isset($_SESSION['nome'])){
        echo "Tentatica de acessar o dado:". $_SESSION['nome'];
    }
}