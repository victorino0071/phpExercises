<?php

$arq = "./text.txt";

$text = "Apenas um texto \n";

$handleWrite = fopen($arq, "a");
$handleRead = fopen($arq, "r");

$whiteText = fwrite($handleWrite, $text);

$readText = fread($handleRead, filesize($arq));

echo $readText;

