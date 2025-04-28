<?php

$arq = "./text.txt";
$handle = fopen($arq, "r");

$subjectArq = fread($handle, filesize($arq));

echo $subjectArq;