<?php


$string = "Victor";

echo md5($string)."\n";
echo md5($string, true)."\n";

echo sha1($string)."\n";
echo sha1($string, true)."\n";