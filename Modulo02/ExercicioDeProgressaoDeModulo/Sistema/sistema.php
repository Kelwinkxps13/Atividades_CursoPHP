<?php

    session_start();

    if(!isset($_SESSION[sha1("user")])){
        header("location: index.php?validate=rejected");
    }

    include_once 'controllers/validate.php';

    function functionPages(){
        validatePages();
    }

    include_once 'views/layout.php';

?>