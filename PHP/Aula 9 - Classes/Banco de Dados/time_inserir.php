<?php

include_once("Connection.php");

if(! isset($_GET['nome']) || ! isset($_GET['cidade'])) {
    echo "Informe os parâmetros GET 'nome' e 'cidade'!";
    exit;
}

$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

$conn = Connection::getConnection();

$sql = "INSERT INTO times (nome, cidade) VALUES (?, ?)";
$stm = $conn->prepare($sql);
$stm->execute([$nome, $cidade]);

echo "Time inserido no banco de dados!";