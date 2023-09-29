<?php

// Implemente duas funções, sendo:
// – a) Calcular e retornar a área de um círculo (PI x Raio x Raio);
// – b) Calcular e retornar a circunferência de um círculo (2 x PI x Raio);
// Ambas funções devem receber o raio do círculo como
// parâmetro. Para o PI, defina uma constante com o valor de
// 3.14.
// Faça a chamada da função para 3 círculos com raios
// distintos.

define("PI", 3.14);

function areaCirc($raio){
    return $raio*$raio*PI;
}

function circunf($raio){
    return 2*$raio*PI;
}

for($i=5;$i<=7;$i++){
echo "area do circulo de raio ".$i." é ".areaCirc($i)."<br>";
echo "circunferencia do circulo de raio ".$i." é ".circunf($i)."<br>";
echo "<br>";
}

?>