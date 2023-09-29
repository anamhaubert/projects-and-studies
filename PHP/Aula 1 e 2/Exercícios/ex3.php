<?php

/*3. Faça um programa que imprima os anos bissextos que existem entre os anos 1980 e 2023. Para
ser um ano bissexto, o mesmo deve-se enquadrar em uma das regras abaixo:
- Ser divisível por 4 e não divisível por 100
- Ser divisível por 4 e ser divisível por 400
Um número ser divisível por outro indica que o resto dessa divisão é igual a 0.*/

$ano = 1980;

for($ano=1980;$ano<=2023;$ano++){
    if($ano%4==0 && ($ano%100!=0 || $ano%400==0)){
        echo "$ano"." ";
    }
}

?>