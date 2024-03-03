<?php



    function validarPagina(){
        
        include_once Config::pathBase()."/models/Connect.php";
        include_once Config::pathBase()."/models/Manager.php";

        if(!isset($_GET['pagina'])){
            return false;
        }

        switch($_GET['pagina']){

            case 'dashboard':
                $titleSection = "Tela de Inicio";
                include_once Config::pathBase()."/views/modulos/dashboard/dashboard.php";
                break;

            case 'inserirAgendamento':               
                $titleSection = "Inserir Agendamento";
                include_once Config::pathBase()."/views/modulos/agendamentos/add.php";
                break;

            case 'atualizarUsuario':     
                $data = (new Manager)->select_common("usuarios", null, ['id'=>$_GET['id']], null)[0];              
                $titleSection = "Atualizar Usuario";
                include_once Config::pathBase()."/views/modulos/clientes/atualizar.php";
                break;

            case 'atualizarAgendamento':
                $data = (new Manager)->select_common("agendamentos", null, ['id'=>$_GET['id']], null)[0];                
                $titleSection = "Atualizar Agendamento";
                include_once Config::pathBase()."/views/modulos/agendamentos/atualizar.php";
                break;

            case "listarMedicos":
                if(isset($_SESSION[sha1("user_data")][0]["tipoAcesso"])){
                    switch ($_SESSION[sha1("user_data")][0]["tipoAcesso"]) {
                        case "admin":
                            $titleSection = "Lista de Medicos";
                            $lista = (new Manager)->select_common("usuarios", null, ['tipoAcesso'=>"medico"], null);
                            
                            if($lista){
                                include_once Config::pathBase()."/views/modulos/clientes/lista.php";
                            }else{
                                echo "nenhum resultado correspondente";
                            }
                            break;
                        case "cliente":
                            $titleSection = "Lista de Medicos Disponiveis";
                            $lista = (new Manager)->select_common("usuarios", null, ['tipoAcesso'=>"medico"], null);
                            
                            if($lista){
                                include_once Config::pathBase()."/views/modulos/clientes/lista.php";
                            }else{
                                echo "nenhum resultado correspondente";
                            }
                            break;    
                        
                    }
                }
                            
                break;

            case "listarPacientes":
                if(isset($_SESSION[sha1("user_data")][0]["tipoAcesso"])){
                    switch ($_SESSION[sha1("user_data")][0]["tipoAcesso"]) {
                        case "admin":
                            $titleSection = "Lista de Pacientes";
                            $lista = (new Manager)->select_common("usuarios", null, ['tipoAcesso'=>"cliente"], null);
                            
                            if($lista){
                                include_once Config::pathBase()."/views/modulos/clientes/lista.php";
                            }else{
                                echo "nenhum resultado correspondente";
                            }
                            break;
                        case "medico":
                            echo "menu ainda nao feito<br>";
                            echo "motivo: necessario relacionamento de tabelas (select_special)";
                            break;
                        
                        
                    }
                }
                            
                break;

            case "listarUsuarios":
                if(isset($_SESSION[sha1("user_data")][0]["tipoAcesso"])){
                    switch ($_SESSION[sha1("user_data")][0]["tipoAcesso"]) {
                        case "admin":
                            $titleSection = "Lista de Usuarios";
                            $lista = (new Manager)->select_common("usuarios", null, null, null);
                            
                            if($lista){
                                include_once Config::pathBase()."/views/modulos/clientes/lista.php";
                            }else{
                                echo "nenhum resultado correspondente";
                            }
                            break;
                        case "medico":
                            echo "menu ainda nao feito<br>";
                            echo "motivo: necessario relacionamento de tabelas (select_special)";
                            break;
                        
                    }
                }
                            
                break;

            case "listarAgendamentos":
                if(isset($_SESSION[sha1("user_data")][0]["tipoAcesso"])){
                    switch ($_SESSION[sha1("user_data")][0]["tipoAcesso"]) {
                        case "admin":
                            $titleSection = "Lista de Agendamentos";
                            $lista = (new Manager)->select_common("agendamentos", null, null, null);
                            
                            if($lista){
                                include_once Config::pathBase()."/views/modulos/agendamentos/lista.php";
                            }else{
                                echo "nenhum resultado correspondente";
                            }
                            break;
                        case "medico":
                            echo "menu ainda nao feito<br>";
                            echo "motivo: necessario relacionamento de tabelas (select_special)";
                            break;
                        case "cliente":
                            $titleSection = "Seus Agendamentos";
                            $lista = (new Manager)->select_common("agendamentos", null, ['cpfCliente' => $_SESSION[sha1("user_data")][0]["cpf"]], null);
                            
                            if($lista){
                                include_once Config::pathBase()."/views/modulos/agendamentos/lista.php";
                            }else{
                                echo "nenhum resultado correspondente";
                            }
                        break;    
                        
                    }
                }
                            
                break;

        }


    }


?>