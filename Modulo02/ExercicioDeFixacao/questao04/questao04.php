<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 04</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <form action="#" method="post" class="col-4 offset-4 mt-5">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">palavra</label>
                    <input type="text" name="string"><br>                  
                </div>
                <div class="col-12 mt-3">
                    <p class="text-end">
                        <button class="btn btn-outline-success">Verificar</button>
                    </p>
                </div>
            </form>
            <div class="col-12 mt-5">
                <?php if(isset($_POST['string'])){
                    $word = $_POST['string'];

                    $x = verify($word);

                    if ($x==1) {
                        echo "<h3> A palavra $word é palíndroma</h3>";
                    }else {
                        echo "<h3> A palavra $word não é palíndroma</h3>";
                    }
                    
                }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>


<?php

    # Crie um algoritmo que verifique que uma palavra é palindroma.

    # uma palavra é palindroma quando ela pode ser lida de tras pra frente

    /*
    exemplo: ana
    de tras pra frente fica: ana
    */


    # pegando a variavel digitada pelo usuario
    
    function verify($word){
        $word;

        $wordReverse = strrev($word);

        if($word==$wordReverse){
            return 1;
        }else if($word!=$wordReverse){
            return 0;
        }

    }



    


?>
