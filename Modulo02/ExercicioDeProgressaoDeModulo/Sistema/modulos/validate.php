<?php

    if (isset($_POST['validate'])) {

        if($_POST['validate']=="accessAccepted"){

            unset($_POST['validate']);
            $handle = fopen("database.product.txt", 'a+');
            fwrite($handle, implode(" - ",$_POST).PHP_EOL);
            fclose($handle);
        }
        

    }else {header("location: ..?page=login&validate=negado");}

?>