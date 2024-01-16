<?php

    /*
    Crie um algoritmo que gere 6 dezenas da mega sena
    */

    $array = [];


    for ($i=0; $i < 6; $i++) { 
        $randNum = rand(1, 60);
        $array[$i] = $randNum;
    }

    # valor da verificaçao
    $arraySize = count($array);
    


    # estrutura que trata se há um numero igual a outro
    while(true){

        # seta a quantidade de não trocas para zero
        $naoIguais = 0;

        # for que caminha pelo $i
        for ($i=0; $i < $arraySize; $i++) { 

            # for que caminha pelo $j
            for ($j=0; $j < $arraySize; $j++) { 

                # if que impede que o $j passe do tamanho do array
                if($j == $arraySize-1 && $i == $arraySize-1){
                    break;
                }
                # if que impede que compare o numero com ele mesmo pra evitar possiveis erros
                if($j==$i){
                    $j++;
                }
                
                # estrutura condicional que verifica se um número é igual a outro
                if($array[$i]==$array[$j]){
                    $array[$i] = rand(1,60);
                    $j++;
                }else{
                    $naoIguais++;
                }
                
            }
        
        }
        if ($naoIguais==$arraySize*($arraySize-1)) {
            break;
        }
        /*
        Por que $arraySize*($arraySize-1)? 

        Pensemos assim: a estrutura vai comparar cada elemento do array com os outros, EXCETO ele mesmo.
        Se o tamanho do array é X, o total de $naoIguais deve ser X(X-1), que é quantas vezes a troca falhou 
        durante o loop for

        pensa em um array de 3 elementos cuja posiçoes são:

        0 1 2

        0 == 1 e 2 (zero é comparado com 1, e depois com 2)
        1 == 0 e 2
        2 == 0 e 1

        note que: há 6 comparaçoes, e que X = 3.
        pela nossa logica, o total de $naoIguais deve ser X(X-1) = 3(3-1) = 3(2) = 6.

        mostrando assim, o porquê de $naoIguais == $arraySize*($arraySize-1).
        */
    }
    

    $dezenas = implode(" - ", $array);

    echo "<h1>6 dezenas da mega-sena</h1> <Br> <BR>";
    echo "<h3>".$dezenas."</h3>";
?>