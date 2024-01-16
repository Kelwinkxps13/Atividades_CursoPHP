<?php

    /*
    Implemente um algoritmo que ordene um array
    de 10 posições. (Não use funções de array)
    */
    $array = [];
    $arrayOrdenado = [];

    # defina aqui o tamanho do array
    $tamanhoDoArray = 10;

    # for pra gerar os elementos do array
    for ($i=0; $i < $tamanhoDoArray; $i++) { 
        $randNum = rand(1, 100);
        $array[$i] = $randNum;
        $arrayOrdenado[$i] = $randNum;
    }

    # printa o array gerado aleatoriamente
    echo "<h3> Array: </h3>";
    echo "[";
    echo implode(" - ", $array);
    echo "]";
    
    # servirá pra guardar o valor original do array
    $valorDaTroca1 = 0;
    $valorDaTroca2 = 0;

    # armazenar o tamanho do array
    $aux = count($array);


    
    # algoritmo de ordenaçao

    while (true) {

        # seta o contador pra zero
        $contadorDeNaoTrocas = 0;

        # for da ordençao
        for ($i=1; $i < $aux; $i++) { 

            /*
            esse if verifica se o primeiro numero é menor que o segundo
            para realizar a troca.
            */
            if($arrayOrdenado[$i-1]>=$arrayOrdenado[$i]){
                $valorDaTroca1 = $arrayOrdenado[$i-1];
                $valorDaTroca2 = $arrayOrdenado[$i];
                $arrayOrdenado[$i-1] = $valorDaTroca2;
                $arrayOrdenado[$i] = $valorDaTroca1;
            }
            # caso contrario, adiciona mais um no contador
            else{
                $contadorDeNaoTrocas ++;
            }
        }
        
        # se o contador atingir o tamanho do array menos um, quebra o loop
        /*
        porque menos um? simples.
        imagine que tenha um array de tres elementos,
        o algoritmo vai comparar o PRIMEIRO com o SEGUNDO, 
        e o SEGUNDO com o TERCEIRO.
        observe que é o tamanho do array menos um.
        ou seja, duas comparaçoes.
        */
        if ($contadorDeNaoTrocas == $aux-1) {
            break;
        }
    }
    

    # mostra o array ordenado na tela
    echo "<Br>";
    echo "<h3> Array Ordenado: </h3>";
    echo "[";
    echo implode(" - ", $arrayOrdenado);
    echo "]";

?>