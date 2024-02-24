<?php

    if(isset($_POST['validate'])){
        if ($_POST['validate'] == "search") {
            $code = $_POST['search'];
            header("location: ../?page=resultSet&action=search&query=$code");
            exit();
        }
    }else{
        echo "<script>Alert('Algo de errado não está certo.')</script>";
    }
    

?>