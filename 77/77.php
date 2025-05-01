<?php

session_start();

if(isset($_SESSION['nome'])){
    echo "Acessando uma sessão criada em outra pagina: </br>";
    echo $_SESSION['nome'];
}