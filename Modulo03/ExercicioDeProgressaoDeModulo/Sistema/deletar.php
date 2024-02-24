<?php

    require_once 'conexao.php';
    
    if(isset($_GET['id'])){

        $id = $_GET['id'];

        if ($_GET['isdeleted']=='*') {
            
            header("location: ?page=products&delete=jaDeletado");

        }else{
            $query = "UPDATE `produtos` SET `isdeleted`='*' WHERE `id`= '$id'";

            $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

            if($resultado){
                header("location: ?page=products&delete=ok");
            }else{
                header("location: ?page=products&delete=erro");
            }
            
        }

        

    }

