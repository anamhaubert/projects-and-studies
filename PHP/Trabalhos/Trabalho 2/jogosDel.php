<?php 

include_once("persistencia.php");

$id = isset($_GET['id']) ? $_GET['id'] : null;
if(! $id) {
    echo "ID não encontrado!<br>";
    echo "<a href='jogos.php'>Voltar</a>";
    exit;
}

$jogos = buscarDados();

$index = -1;
for($i=0; $i<count($jogos); $i++) {
    if($jogos[$i]['id'] == $id) {
        $index = $i;
        break;
    }
}

if($index < 0) {
    echo "ID não encontrado!<br>";
    echo "<a href='jogos.php'>Voltar</a>";
    exit;
}

array_splice($jogos, $index, 1);

salvarDados($jogos); 

header("location: jogos.php");