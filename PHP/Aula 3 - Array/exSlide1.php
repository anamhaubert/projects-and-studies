<?php

/* 1- Crie 4 arrays em PHP sem chave, cada um deles com 5 posições. 
Após isso, faça um laço sobre cada um dos arrays mostrando seus valores em uma linha de uma tabela. 
Utilize PHP e HTML para desenhá-la. */

$profs = array("Daniel",
               "Ana Paula",
               "Humberto",
               "Julio",
               "Juliana");

$times = array("Inter",
               "Gremio",
               "Palmeiras",
               "Corinthians",
               "Botafogo");

$frutas = array("Maca",
               "Banana",
               "Pera",
               "Laranja",
               "Uva");     
               
$animais = array("Cachorro",
               "Gato",
               "Calopsita",
               "Urso",
               "Abelha");

echo "<table border=1>";

echo "<tr>";
foreach($profs as $p)
echo "<td>".$p."</td>";
echo "<br>";
echo "</tr>";

echo "<tr>";
foreach($times as $t)
echo "<td>".$t."</td>";
echo "</tr>";

echo "<tr>";
foreach($frutas as $f)
echo "<td>".$f."</td>";
echo "</tr>";

echo "<tr>";
foreach($animais as $a)
echo "<td>".$a."</td>";
echo "</tr>";


echo "</table>";

?>