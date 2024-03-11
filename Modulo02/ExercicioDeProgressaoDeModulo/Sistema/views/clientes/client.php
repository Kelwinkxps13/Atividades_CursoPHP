<?php

    /* Salvar os dados do formulário no arquivo */

    if(isset($_POST['action'])){

        if($_POST['action'] == "insert"){
            
            # Removendo o elemento do array
            unset($_POST['action']);

            # Criando ou abrindo um arquivo
            $handle = fopen("database.client.txt", 'a+');

            # Escrever os dados no arquivo
            //$string = implode(" - ",$_POST);

            # usando o sha1 da senha
            $_POST['password'] = sha1($_POST['password']);

            fwrite($handle, implode(" - ",$_POST).PHP_EOL);

            # Fechar o arquivo
            fclose($handle);

            # Redirecionar à listagem
            header("location: ../../sistema.php?page=listClient");

        }elseif($_POST['action'] == "delete"){
        
            # Removendo o action
            unset($_POST['action']);

            # Lendo o arquivo txt
            $data = file('database.client.txt');

            # Remover a linha que eu quero excluir
            unset($data[$_POST['id']]);

            # Apagando o arquivo anterior
            //unlink("database.client.txt");

            # Recriando o arquivo com a opção "w" para zera-lo   
            $handle = fopen("database.client.txt","w+");

            # Escrevendo os dados (já sem o elemento removido)
            fwrite($handle, implode("", $data));

            # Fechar o arquivo
            fclose($handle);

            # Redirecionar à listagem
            header("location: ../../sistema.php?page=listClient");


        }elseif($_POST['action'] == "update"){
            
            $id = $_POST['id'];
            # Removendo o action
            unset($_POST['action'], $_POST['id']);

            # Lendo o arquivo txt
            $data = file('database.client.txt');
            
            # Realocar os dados novos no id Atual
            $data[$id] = implode(' - ',$_POST).PHP_EOL;

            # Recriando o arquivo com a opção "w" para zera-lo   
            $handle = fopen("database.client.txt","w+");

            # Escrevendo os dados (já sem o elemento removido)
            fwrite($handle, implode("", $data));

            # Fechar o arquivo
            fclose($handle);

            # Redirecionar à listagem
            header("location: ../../sistema.php?page=listClient");


        }
    }else{
        echo "Acesso negado";
    }


?>