<?php

# iniciando a sessao
session_start();

# incluindo os arquivos necessarios
include_once "../models/Config.php";
include_once Config::pathBase() . "/models/Connect.php";
include_once Config::pathBase() . "/models/Manager.php";

# verificando se existe um action com o method post.
if ($_REQUEST['action']) {

    # removendo o action depois de verificado sua existencia.
    unset($_POST['action']);

    #instanciando um objeto do tipo manager.
    $manager = new Manager;

    # switch para ver os valores que o action pode assumir.
    switch ($_REQUEST['action']) {

        case 'delete':

            # deleta do banco de dados o registro escolhido.
            $manager->delete_common("usuarios", ['id' => $_POST['id']], null);
            break;

        case 'insert':

            # define o post senha como o sha1 dele mesmo (criptografia)
            $_POST['senha'] = sha1($_POST['senha']);

            # verifica se o usuario ja existe
            $isset = $manager->select_common("usuarios", null, ['cpf'=>$_POST['cpf'], 'email'=>$_POST['email']], null);
            if($isset){

                # caso ele exista, ele retorna com erro
                header("location: " . Config::urlBase() . "?message=OcorreuUmErroAoTentarSeCadastrar");
            }
            # caso não exista, ele cadastra
            else{
                $manager->insert_common("usuarios", $_POST, null);
            }
            break;

        case 'update':

            # atualiza o usuario com base no seu id
            $manager->update_common("usuarios", $_POST, ["id" => $_POST['id']], null);
            break;
    }

    # verificando se existe um get action
    if (isset($_GET['action'])) {

        # caso ele tenha o valor insert
        if ($_GET['action'] == "insert") {

            # leva de volta pra tela inicial com uma mensagem por get
            header("location: " . Config::urlBase() . "?message=cadastroRealizadoComSucesso");
        }
    } 
    
    # caso ele nao tenha um get action, ele ver o tipo de acesso do usuario logado
    else if (isset($_SESSION[sha1("user_data")][0]["tipoAcesso"])) {

        # possiveis escolhas e seus redirecionamentos pra cada tipo de usuario
        switch ($_SESSION[sha1("user_data")][0]["tipoAcesso"]) {
            case "admin":
                header("location: " . Config::urlBase() . "/sistema.php?pagina=listarUsuarios");
                break;
            case "medico":
                header("location: " . Config::urlBase() . "/sistema.php?pagina=listarUsuarios");
                break;
            case "cliente":
                header("location: " . Config::urlBase() . "/sistema.php?pagina=listarUsuarios");
                break;
        }
    }
}
