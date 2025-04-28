<?php

$informacoes = ["email", "telefone", "nome", "idade", "Localizacao"];

$stringInformacoes = strtolower(implode(", ", $informacoes));

echo $stringInformacoes;