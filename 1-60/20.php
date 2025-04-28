<?php

$adminPassword = "Vic@357159";

$login = [];
$password = [];

while(true){
    echo "Sign up: 1 \n";
    echo "Sign in: 2 \n";
    echo "Usuarios: 3 \n";
    echo "Verificar senhas e usuarios (Admin): 4 \n";
    echo "Sair: 5 \n";
    $choise = trim(fgets(STDIN));

    switch ($choise){
        case 1:
            if (empty($login) || empty($password)){
                echo "Voce precisa fazer um Sign in primeiro \n";
                break;
            }
            echo "Digite o seu Login: ";
            $thisLogin = trim(fgets(STDIN));
            echo "Digite sua senha: ";
            $thisPassword = trim(fgets(STDIN));

            foreach ($login as $index => $value){
                if($value == $thisLogin){
                    if ($thisPassword == $password[$index]){
                        echo "Login feito com sucesso \n";
                        break;
                    }else{
                        echo "Senha incorreta \n";
                        break;
                    }
                }
            }
            break;

        case 2:
            echo "Crie o seu login:";
            $newLogin = trim(fgets(STDIN));
            if (empty($newLogin)){
                echo "Login Nulo \n";
                break;
            }else{
                $exist = false;
                foreach ($login as $value){
                    if ($newLogin == $value){
                        echo "Usuario já existente \n";
                        $exist = true;
                    }
                }
                if ($exist){
                    break;
                }
            }
            echo "Crie sua senha:";
            $newPassword = trim(fgets(STDIN));
            if (empty($newLogin)){
                echo "Login Nulo \n";
                break;
            }        
            $login = [...$login, $newLogin];
            $password = [...$password, $newPassword];
            break;
        case 5:
            exit();
        case 4:
            echo "Digite a senha de administrador:";
            $newPassword = trim(fgets(STDIN));
            if ($newPassword == $adminPassword){
                echo var_dump($login)."\n";
                echo var_dump($password)."\n";
                break;
            }else{
                echo "Senha invalida \n";
            }
        case 3:
            foreach($login as $value){
                echo $value."\n";
            }
            break;
        default:
            echo "Coloque uma opcao valida \n";
    }
}