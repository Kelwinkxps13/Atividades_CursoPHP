<?php

    /*
    Crie um algoritmo que leia um array 5 posições e
    nesse array ele mostre o maior elemento e o menor.
    (Não use funções de array)
    */

    $array = [];


    # for pra gerar os elementos do array
    for ($i=0; $i < 5; $i++) { 
        $randNum = rand(1, 100);
        $array[$i] = $randNum;
    }

    # printa o array
    foreach ($array as $key => $value) {
        echo "$key => $value <Br>";
    }


    # for para ver o maior e o maior elemento do array

    /*
    Inicialmente temos que definir o menor e o maior valor do array como o primeiro elemento,
    pois nao podemos usar a funçao do maior e menor numero double possivel pra garantir que o
    primeiro vai ser o menor/maior.
    */
    $menorValor = $array[0];
    $maiorValor = $array[0];
    for ($i=0; $i < 5; $i++) { 

        #if pra procurar o menor valor
        if ($menorValor > $array[$i]) {
            $menorValor = $array[$i];
        }

        # if pra procurar o maior valor
        if ($maiorValor < $array[$i]) {
            $maiorValor = $array[$i];
        }

    }
    
    # print do maior e do menor numero
    echo "<br><br><Br>";
    echo "menor valor do array: ".$menorValor."<br>";
    echo "maior valor do array: ".$maiorValor;

?>