<?php

// 3- Faça um programa em PHP que receba como parâmetro GET
// uma cor e gere uma página HTML com o fundo na cor escolhida.

$color=$_GET["cor"];

echo "<body style='background-color:".$color."'>";

?>