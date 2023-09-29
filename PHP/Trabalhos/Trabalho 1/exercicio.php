<?php

/*
Atividade – Métodos GET e POST
1. Escreva um programa em PHP que exiba uma progressão aritmética. Ele deve receber pelo método GET os 
seguintes parâmetros:

inicio = número do início da progressão aritmética
razao = razão da progressão aritmética
quantidade = quantidade de números (termos) da progressão aritmética.

Caso os 3 parâmetros tenham sido enviados, exiba a progressão aritmética requisitada. 
Caso contrário, exiba um mensagem informando qual ou quais parâmetros não foram informados.

Dica: o próximo termo da progressão aritmética é calculado pela soma do termo anterior e da razão.
*/

$falta = array();

$inicio=$_GET['a'];
$razao=$_GET['r'];
$quant=$_GET['q'];

if(!isset($inicio)) $falta[]='termo inicial';
if(!isset($razao))  $falta[]='razao';
if(!isset($quant))  $falta[]='quantidade';

if(empty($falta)){

    echo $inicio."<br>";
for ($i = 1; $i < $quant ; $i ++) { 
    if ($inicio)
    $termo = $inicio+($i*$razao);
    echo $termo."<br>";
}
    }else echo "o(s) seguinte(s) parametro(s) nao foi(foram) informado(s):".implode(', ', $falta);

?>
