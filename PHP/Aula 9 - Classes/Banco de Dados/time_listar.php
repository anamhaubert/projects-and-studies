<?php

include_once("Connection.php");

$conn = Connection::getConnection();

// $sql = "SELECT id,nome,cidade FROM times WHERE";
$sql = "SELECT * FROM times";

$stm = $conn->prepare($sql);
$stm->execute();

$result = $stm->fetchAll();
// echo "<pre>".print_r($result,true)."<pre"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>bd times</title>
</head>
<body>
    <table  border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th></th>
        </tr>

    <?php foreach ($result as $r):?>
        <tr>
            <th><?= $r["id"] ?></th>
            <th><?= $r["nome"] ?></th>
            <th><?= $r["cidade"] ?></th>
            <th><a href="time_excluir.php?id=<?= $r["id"] ?>"
                   onclick="return confirm('confirma a exclusão?');">
            excluir</th></a>
        </tr>
    <?php endforeach;?>
    </table> 
</body>
</html>