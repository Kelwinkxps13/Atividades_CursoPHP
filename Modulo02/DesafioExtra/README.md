# DesafioExtra

Responda com suas palavras:

Para que serve o algoritmo enigma abaixo? Prove que ele é correto.<br>

Algoritmo enigma (pseudocódigo)<br>
~~~
Entrada: a, b (naturais)
     se a < b
         devolva 0
     se não
          devolva 1 + enigma(a - b, b)
~~~
~~~php
<?php

    function enigma($a, $b){

        if($a < $b){
            return 0;
        }else{
            return 1 + enigma($a-$b, $b);
        }

    }

?>
~~~


# Solução:

o algoritmo retorna um numero X onde X é a parte inteira de uma divisao de A por B.

### segundo o algoritmo:

se A < B: retorne zero.<Br>
Matematicamente falando: a parte inteira da divisão de A por B onde A < B é sempre zero.

senao: retorne 1 + (enigma($a-$b, $b)).<br>
A parte inteira da divisão de A por B onde A >= B é maior ou igual a 1.

### prova:

##### temos dois casos: se A/B tiver uma parte decimal, e se A/B não tiver parte decimal

**caso 1) se A/B tiver parte decimal**: se A/B resultar em um numero decimal N = I + D, onde:
- N é o resultado da divisão;
- I é a parte inteira da divisão;
- D é a parte decimal da divisão.
  
O valor de X é simplesmente a parte inteira representada por I, ou seja, X = I.

**caso 2) se A/B não tiver parte decimal**: A/B deve resultar simplesmente no nosso X, pois em N = I + D, o valor de D é zero, ficando N = I. Como queremos a parte inteira, X = I = N.


### exemplos:

1 ) se A = 5 e B = 2: a divisão A/B = 5/2 resulta em 2,5. E como há parte decimal, nosso X é a parte inteira, ou seja, X = 2.
jogando no algoritmo: enigma(5, 2) retorna 2. Confirmando a prova.

2 ) se A = 3 e B = 2: a divisão A/B = 3/2 resulta em 1,5. E como há parte decimal, nosso X é a parte inteira, ou seja, X = 1.
jogando no algoritmo: enigma(3, 2) retorna 1. Confirmando a prova.

3 ) se A = 5 e B = 1: a divisão A/B = 5/1 resulta em 5. E como não há parte decimal, nosso X é o resultado, ou seja, X = 5.
jogando no algoritmo: enigma(5, 1) retorna 5. Confirmando a prova.

4 ) se A = 16 e B = 3: a divisão A/B = 16/3 resulta em 5,333334. E como há parte decimal, nosso X é a parte inteira, ou seja, X = 5.
jogando no algoritmo: enigma(16, 3) retorna 5. Confirmando a prova.

5 ) se A = 1 e B = 4: a divisão A/B = 1/4 resulta em 0,25. E como há parte decimal, nosso X é a parte inteira, ou seja, X = 0.
jogando no algoritmo: enigma(1, 4) retorna 0. Confirmando a prova.
