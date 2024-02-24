<?php

    require_once 'conexao.php';
    include_once 'crud.php';
    include_once 'deletar.php';
    global $pathBase;

    function validatePages(){

        if(!isset($_GET['page'])){
            require_once 'main.php';
        }else{

            switch($_GET['page']){

                case "main":
    
                    require_once 'main.php';
                break;
    
                case "cadastrarProduto":
                    
                    require_once 'product/addProduct.php';
                break;

                case "products":
                    
                    require_once 'product/products.php';
                break;
                case "deletedProd":
                    
                    require_once 'product/deletedProd.php';
                break;
                case "editProduct":
                    
                    require_once 'product/editProduct.php';
                break;
                case "resultSet":
                    
                    require_once 'search/resultSet.php';
                break;
    
            }

        }

        

    }

?>