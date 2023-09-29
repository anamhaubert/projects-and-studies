<?php

// 2- Implemente um programa em PHP que receba 3 números e
// imprima a média aritmética deles. Codifique dois programas,
// recendo os parâmetros por:
// – Método POST

$nro1=$_POST['num1'];
$nro2=$_POST['num2'];
$nro3=$_POST['num3'];

$media = ($nro1 + $nro2 + $nro3)/3;
echo $media."<br>";

?>