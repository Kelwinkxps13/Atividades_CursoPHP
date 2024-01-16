<?php

    function enigma($a, $b){

        if($a < $b){
            return 0;
        }else{
            return 1 + enigma($a-$b, $b);
        }

    }

?>