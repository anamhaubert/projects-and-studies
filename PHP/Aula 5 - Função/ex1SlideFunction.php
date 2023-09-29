<?php

// Implemente uma função para calcular o fatorial de um
// número. Depois, chame essa função para os números de 5 a
// 12.

function fatorial($num){
    $n=1;

    for($i=$num;$i>=1;$i--)
    $n=$i*$n;

    return $n;
}

for($i=5;$i<=12;$i++)
echo fatorial($i)."<br>";

?>