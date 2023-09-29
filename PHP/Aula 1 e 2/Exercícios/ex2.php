<?php 

/*2. Considerando um número N=5 e uma razão R=3, crie um programa que imprima a sequência de
progressão aritmética de N contendo 10 valores. A sequência aritmética inicia em N, sendo os
demais valores calculados somando o termo anterior com a razão.*/

$n = 5;

while($i<10){
    echo "$n"." ";
    $n+=3;
    $i++;
}

?>