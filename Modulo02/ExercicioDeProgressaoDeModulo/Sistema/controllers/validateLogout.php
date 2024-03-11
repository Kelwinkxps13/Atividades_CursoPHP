<?php
    session_start();
    if(isset($_SESSION[sha1("user")])){
        session_destroy();
        header("location: ../");
    }