<?php

include_once("Connection.php");

$id = 0;

if(isset($_GET['id']))
$id = $_GET['id'];

if(!$id){
    echo "id inválido!<br>";
    echo "<a href='time_listar.php'>voltar</a>";
    exit;
}
$conn = Connection::getConnection();

$sql = "DELETE FROM times  WHERE id=?";

$stm = $conn->prepare($sql);
$stm->execute([$id]);

header("location: time_listar.php");
