<?php

echo "Acessando cookie: </br>";

if (isset($_COOKIE['Lembrar_Usuario'])){
    echo "O valor do cookie é: ". $_COOKIE['Lembrar_Usuario']."</br>";
}