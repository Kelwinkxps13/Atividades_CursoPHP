<?php

    session_start();
    include_once "../models/Config.php";
    include_once Config::pathBase()."/models/Connect.php";
    include_once Config::pathBase()."/models/Manager.php";

    if($_REQUEST['action']){
        unset($_POST['action']);
        $manager = new Manager;

        switch($_REQUEST['action']){          
            
            case 'delete':
                $manager->delete_common("usuarios", ['id'=>$_POST['id']], null);
            break;

            case 'insert':

                $_POST['senha'] = sha1($_POST['senha']);
                $manager->insert_common("usuarios", $_POST, null);
            break;

            case 'update':
                $manager->update_common("usuarios", $_POST, ["id"=>$_POST['id']], null);
            break;

        }
        if (isset($_GET['action'])) {
            if ($_GET['action']=="insert") {
                header("location: ".Config::urlBase()."?message=cadastroRealizadoComSucesso");
            }
        }
        else if(isset($_SESSION[sha1("user_data")][0]["tipoAcesso"])) {
            switch ($_SESSION[sha1("user_data")][0]["tipoAcesso"]) {
                case "admin":
                    header("location: ".Config::urlBase()."/sistema.php?pagina=listarUsuarios");
                    break;
                case "medico":
                    header("location: ".Config::urlBase()."/sistema.php?pagina=listarUsuarios");
                    break;
                case "cliente":
                    header("location: ".Config::urlBase()."/sistema.php?pagina=listarUsuarios");
                    break;
                
             
            }
        }
    }



?>