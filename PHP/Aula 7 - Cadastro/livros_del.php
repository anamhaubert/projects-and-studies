<?php 

include_once("persistencia.php");

//Caputura o ID do livro como parâmetro GET
$id = isset($_GET['id']) ? $_GET['id'] : null;
if(! $id) {
    echo "ID não encontrado!<br>";
    echo "<a href='livros.php'>Voltar</a>";
    exit;
}

//Carrega os livros já cadastrados
$livros = buscarDados();

//Busca o livro, recuprando seu ID
$index = -1;
for($i=0; $i<count($livros); $i++) {
    if($livros[$i]['id'] == $id) {
        $index = $i;
        break;
    }
}

if($index < 0) {
    echo "ID não encontrado!<br>";
    echo "<a href='livros.php'>Voltar</a>";
    exit;
}

//Exclui o livro do array
array_splice($livros, $index, 1);

//Persiste os dados no arquivo
salvarDados($livros, "livros.json"); 

//Redireciona novamente para o formulário/listagem
header("location: livros.php");