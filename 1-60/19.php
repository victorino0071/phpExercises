<?php

$login = [];
$password = [];

while(true){
    echo "Sign up = 1 / Sign in = 2 / sair = 3:";
    $choise = trim(fgets(STDIN));

    if ( $choise == 1){
        if (empty($login) || empty($password)){
            echo "Voce precisa fazer um Sign in primeiro \n";
            continue;
        }
        echo "Digite o seu Login: ";
        $thisLogin = trim(fgets(STDIN));
        echo "Digite sua senha: ";
        $thisPassword = trim(fgets(STDIN));

        foreach ($login as $index => $value){
            if($value == $thisLogin){
                if ($thisPassword == $password[$index]){
                    echo "Login feito com sucesso \n";
                    continue;
                }else{
                    echo "Senha incorreta \n";
                    continue;
                }
            }
        }

    }else if ( $choise == 2){
        echo "Crie o seu login:";
        $newLogin = trim(fgets(STDIN));
        if (empty($newLogin)){
            echo "Login Nulo \n";
            continue;
        }else{
            $exist = false;
            foreach ($login as $value){
                if ($newLogin == $value){
                    echo "Usuario já existente \n";
                    $exist = true;
                }
            }
            if ($exist){
                continue;
            }
        }
        echo "Crie sua senha:";
        $newPassword = trim(fgets(STDIN));
        if (empty($newLogin)){
            echo "Login Nulo \n";
            continue;
        }        
        $login = [...$login, $newLogin];
        $password = [...$password, $newPassword];
    }else if ( $choise == 3){
        break;
    }else if ($choise == 4){
        echo var_dump($login)."\n";
        echo var_dump($password)."\n";
    }else {
        echo "Coloque uma opcao valida \n";
    }
}