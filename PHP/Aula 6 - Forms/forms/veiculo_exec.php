<?php

$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$combust = $_POST["combustivel"];

echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $modelo . "<br>";
echo "Marca: " . $marca . "<br>";

if($combust=='A')
    $combust = 'Álcool';

else if($combust=='G')
    $combust = 'Gasolina';

else if($combust=='F')
    $combust = 'Flex';

    echo "Combustível: " . $combust . "<br>";

echo "<br><br>";
echo "<a href='veiculo.php'>Cadastrar outro veículo</a>";