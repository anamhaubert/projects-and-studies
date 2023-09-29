<?php

/*2 - Faça um programa que percorra os números de 1 a 100 e imprima a
soma de todos eles como saída*/

$num = 1;
$soma = 0;

for($num = 1;$num<=100;$num++){
    echo "$num"." ";
    $soma+=$num;
}
echo "<br>"."a soma é"." "."$soma";
?>