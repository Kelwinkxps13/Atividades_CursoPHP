<?php

function validatePages()
{
    if (!isset($_GET['page'])) {
        return false;
    } else {
        switch ($_GET['page']) {
            case 'dashboard':

                require_once 'views/dashboard.php';

                break;
            case 'addProduct':

                require_once 'views/produtos/addProduct.php';

                break;
            case 'listProduct':

                require_once 'views/produtos/listProduct.php';

                break;
            case 'updateProduct':

                require_once 'views/produtos/updateProduct.php';

                break;
            case 'addClient':

                require_once 'views/clientes/addClient.php';

                break;
            case 'listClient':

                require_once 'views/clientes/listClient.php';

                break;
            case 'updateClient':

                require_once 'views/clientes/updateClient.php';

                break;
        }
    }
}
