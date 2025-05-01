<?php

$dirname1 = './simpleDir';
$dirname2 = './recursive/recursive1';


if (mkdir($dirname1, 0777, false) && mkdir($dirname2, 0777, true)){
    echo 'diretorio criado com sucesso';
    
}else{
    echo 'falha ao criar o diretorio';
}
