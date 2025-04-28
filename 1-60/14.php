<?php

$number = 10;
$control = 1;
$result = 1;
while ($control <= $number){
    $result = $result * $control;
    $control++;
    echo $result."\n"; 
}
echo "Resultado final é:".$result."\n";