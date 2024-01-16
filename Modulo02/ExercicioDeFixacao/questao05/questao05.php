<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao 05</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
            <form action="#" method="post" class="col-4 offset-4 mt-5">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Lado 1</label>
                    <input type="text" name="lado1"><br>                  
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Lado 2</label>
                    <input type="text" name="lado2"><br>                  
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Lado 3</label>
                    <input type="text" name="lado3"><br>                  
                </div>
                <div class="col-12 mt-3">
                    <p class="text-end">
                        <button class="btn btn-outline-success">Verificar</button>
                    </p>
                </div>
            </form>
            <div class="col-12 mt-5">
                
            <?php

                # Crie um algoritmo onde seja possivel verificar o tipo de um triangulo.

               /*
               Tipos de triangulos euclidianos:

               isosceles: quando dois lados sao igual
               escaleno: quando todos os lados sao diferentes
               equilatero: quando todos os lados sao iguais
               */



                if (isset($_POST['lado1'])) {
                    $lado1 = $_POST['lado1'];
                    $lado2 = $_POST['lado2'];
                    $lado3 = $_POST['lado3'];


                    # verifica se é um numero
                    if (is_numeric($lado1) && is_numeric($lado2) && is_numeric($lado3)) {

                        # verifica se todos os lados sao positivos
                        if ($lado1 > 0 && $lado2 > 0 && $lado3 > 0) {

                            # verifica se equilatero, isosceles ou escaleno
                            if ($lado1 == $lado2 && $lado2 == $lado3) {
                                echo "<h3>Triângulo Equilátero </h3>";
                            } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
                                echo "<h3>Triângulo Isósceles</h3>";
                            } else {
                                echo "<h3>Triângulo Escaleno</h3>";
                            }

                        } else {
                            echo "<h3>Os lados do triângulo devem ser números positivos.</h3>";
                        }

                    }else{
                        echo "<h3>Digite apenas números!!!</h3>";
                    }
                }


                ?>
    

            </div>
            </div>
        </div>
    </div>
</body>
</html>
