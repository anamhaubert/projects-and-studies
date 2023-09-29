<?php

/*3- Faça um programa que percorra os números de 1 a 50 e imprima
como saída apenas os números que sejam divisíveis por 3
– Utilize o operador de resto de divisão: %
– Exemplo:
● 6 % 3 é igual a 0 – Então, 6 é divisível por 3
● 7 % 3 é igual a 1 (1 é o resto da divisão) - Então, 7 NÃO é divisível por 3*/

$num = 1;

for($num=1;$num<=50;$num++){
    if($num%3 == 0)
    echo "$num"." ";
}
?>