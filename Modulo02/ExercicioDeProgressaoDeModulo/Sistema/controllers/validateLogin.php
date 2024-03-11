<?php

    # validaçoes de redirecionamentos

    if (isset($_POST["validate"])) {
        if ($_POST['validate']=="accessAccepted") {
            session_start();
            $_SESSION[sha1("user")] = $_POST['email'];
            header("location: ../");
        }
    }
    
?>