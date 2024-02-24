<?php

    include_once 'conexao.php';
    include_once '../crud.php';

    if(isset($_POST['validate'])){
        if ($_POST['validate'] == "add") {
            unset($_POST['validate']);
            $resultado = inserir("produtos", $_POST);
            if ($resultado) {
                unset($_POST);
                header("location: ../?page=products&action=insert");
                exit();
            }else{
                echo "<script>Alert('Algo de errado não está certo.')</script>";
            }
        }else if($_POST['validate'] == "edit"){

            $acessToken = $_GET['accessToken'];

            unset($_POST['validate']);
            
            $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
            $barcode = mysqli_real_escape_string($conexao, $_POST['codigoBarras']);
            $preco1 = mysqli_real_escape_string($conexao, $_POST['preco1']);
            $preco2 = mysqli_real_escape_string($conexao, $_POST['preco2']);
            $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
            $categoria = mysqli_real_escape_string($conexao, $_POST['categoria']);
            $query = "UPDATE `produtos` SET `nome`='$nome', `codigoBarras`='$barcode', `preco1`='$preco1', `preco2`='$preco2', `descricao`='$descricao', `categoria`='$categoria' WHERE `id` = '$acessToken'";
            $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
            if($resultado){
                unset($_POST);
                header("location: ..?page=products&action=update");
                exit;
            }else{
                echo "<script>alert('algo de errado não esta certo');</script>";
            }
        }
        
    }
?>