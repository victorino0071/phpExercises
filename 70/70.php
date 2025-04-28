<?php

$dirname1 = '../69';
$dirname2 = './';

$arquivos1 = scandir($dirname1);
$arquivos2 = scandir($dirname2);

print_r($arquivos1);
print_r($arquivos2);