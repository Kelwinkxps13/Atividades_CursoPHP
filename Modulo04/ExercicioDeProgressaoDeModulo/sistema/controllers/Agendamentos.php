<?php

    include_once "../models/Config.php";
    include_once Config::pathBase()."/models/Connect.php";
    include_once Config::pathBase()."/models/Manager.php";
    session_start();

    if($_REQUEST['action']){
        unset($_POST['action']);
        $manager = new Manager;

        switch($_REQUEST['action']){          
            
            case 'delete':
                $manager->delete_common("agendamentos", ['id'=>$_POST['id']], null);
            break;

            case 'insert':

                $_POST['dataConsulta'] = $_POST['dataC']." ".$_POST['horaC'];
                unset($_POST['dataC']);
                unset($_POST['horaC']);

                $searchUser = $manager->select_common("usuarios", ["id", "cpf"], ['id'=>$_SESSION[sha1("user_data")][0]["id"]], null);
                $_POST['idCliente'] = $searchUser[0]["id"];
                $_POST['cpfCliente'] = $searchUser[0]["cpf"];
                $_POST['nomeCliente'] = $_SESSION[sha1("user_data")][0]["nome"];
                $_POST['emailCliente'] = $_SESSION[sha1("user_data")][0]["email"];
                
                $searchMedico = $manager->select_common("usuarios", ["id", "cargo"], ["nome"=>$_POST['nomeMedico']], null);
                $_POST['idMedico'] = $searchMedico[0]["id"];
                $_POST['cargoMedico'] = $searchMedico[0]["cargo"];
                $manager->insert_common("agendamentos", $_POST, null);
            break;

            case 'update':
                $_POST['dataConsulta'] = $_POST['dataC']." ".$_POST['horaC'];
                unset($_POST['dataC']);
                unset($_POST['horaC']);
                $manager->update_common("agendamentos", $_POST, ["id"=>$_POST['id']], null);
            break;

        }

        if (isset($_SESSION[sha1("user_data")][0]["tipoAcesso"])) {
            switch ($_SESSION[sha1("user_data")][0]["tipoAcesso"]) {
            case "admin":
                header("location: ".Config::urlBase()."/sistema.php?pagina=listarAgendamentos");
                break;
            case "medico":
                header("location: ".Config::urlBase()."/sistema.php?pagina=listarAgendamentos");
                break;
            case "cliente":
                header("location: ".Config::urlBase()."/sistema.php?pagina=listarAgendamentos");
                break;
            
            
        }
        }
        


    }



?>