<?php
    $string = "4946161";
    $transformedString = 0;

    $IntArray = [0,1,2,3,4,5,6,7,8,9];
    $stringArray = ["0","1","2","3","4","5","6","7","8","9"];

    $controlLenght = strlen($string) - 1;

    for ($i = 0; $i < strlen($string); $i++){
        $control = 0;

        while ($string[ $i] != $stringArray[$control]){
            $control++;
        }

        $transformedString = $transformedString + $IntArray[$control]*10**$controlLenght;
        echo $transformedString."</br>";

        $controlLenght = $controlLenght - 1;
    }

    echo $transformedString - 1;

    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>";

    $number = 0;
    $transformedNumber = "";
    $numberLenght = 0;
    $algarismPosition = 0;
    
    echo "Numero Transformado em String:".$number."</br>";
    while (true){
        if ($number / 10**$numberLenght < 1){
            break;
        }
        $numberLenght ++;
    }
    
    echo "NumberLenght: ". $numberLenght . "</br>";


    if ($numberLenght == 0){
        $transformedNumber = "0";
    }
    
    for ($i = $numberLenght-1; $i != -1 ; $i--){
        $algarismo = 0;
        while (true){
            if ($algarismo*10**$i > $number){
                $algarismo--;
                break;
            }
            $algarismo ++;

        }

        echo "algarismo: ". $algarismo. "</br>";

        $transformedNumber[$algarismPosition]= $stringArray[$algarismo];
        $algarismPosition++;

        $number = $number  - $algarismo*10**$i;
    }    

    echo "Numero Transformado em String:".$transformedNumber;
