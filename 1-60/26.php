<?php


function fibonnacci($before = 0, $actual = 1, $limit = 600){
    $after = $before + $actual;
    $before = $actual;
    echo $actual."\n";
    if ($actual < $limit){
        fibonnacci($before, $after);
    }    
    
}

fibonnacci();