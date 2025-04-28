<?php


$string = "Victinho mil grau nota top";

$stringEncoded = base64_encode($string);

echo $stringEncoded. "\n";

$stringDecoded = base64_decode($stringEncoded);

echo $stringDecoded;