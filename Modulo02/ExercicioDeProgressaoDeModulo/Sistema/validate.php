<?php

    # validaçoes de redirecionamentos

    function validatePages(){
            if (!isset($_GET['page'])) {
                require_once 'modulos/login.php';
            }else{
                switch ($_GET['page']) {
                    case 'login':
                        require_once 'modulos/login.php';
                    break;
                    case 'main':
                        require_once 'modulos/main.php';
                    break;
                }
            }
        }
?>