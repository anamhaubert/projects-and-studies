<?php

// 2- Implemente um programa em PHP que receba 3 números e
// imprima a média aritmética deles. Codifique dois programas,
// recendo os parâmetros por:
// – Método GET

$nro1=$_GET['num1'];
$nro2=$_GET['num2'];
$nro3=$_GET['num3'];

$media = ($nro1 + $nro2 + $nro3)/3;
echo $media."<br>";

?>