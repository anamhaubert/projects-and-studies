<?php

include_once("persistencia.php");

$livros = buscarDados();
    $titulo="";
    $genero="";
    $qnt_pag="";
    $erro="";
    $erros=array();

if(isset($_POST['submetido'])){
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $qnt_pag = $_POST['pag'];

    if(!trim($titulo))
    array_push($erros,'informe o titulo');

    if(!($genero))
    array_push($erros,'informe o genero');

    if(!($qnt_pag))
    array_push($erros,'informe a quantidade de páginas') ;

    if(!$erros){

    if(strlen(trim($titulo))<3 || strlen(trim($titulo))>50)
    array_push($erros,'informe um titulo válido') ;

    if($qnt_pag<=0)
    array_push($erros,'informe uma quantidade de páginas válida');

    $livroExistente = false;
    foreach ($livros as $livro) {
        if (strtolower($livro['titulo']) === strtolower($titulo)) {
            $livroExistente = true;
            break;
        }
    }
    
    if ($livroExistente)
    array_push($erros,'já existe um livro com o mesmo título');}
    

    if(!$erros){$id = vsprintf( '%s%s-%s-%s-%s-%s%s%s',
    str_split(bin2hex(random_bytes(16)), 4) );

    $dados = array('titulo' => $titulo, 'genero' => $genero, 'pag' => $qnt_pag, 'id'=>$id);

    array_push($livros,$dados);

    salvarDados($livros);
    
    header("location: livros.php");
    
    } else 
        $erro = implode("<br>", $erros);
        }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de livros</title>
</head>
<body>
    
 <h1> Cadastro de livros </h1>

 <h3> Formulário de livros </h3>

    <form action="" method="POST">

        <input type="text" name="titulo" placeholder="Informe o título do livro" value="<?= $titulo ?>">
        <br><br>

        <select name="genero" value="<?= $genero ?>">
            <option value="">---Selecione o gênero literário---</option>
            <option value="D" <?php if($genero=='D') echo 'selected'; ?>>Drama</option>
            <option value="F" <?php if($genero=='F') echo 'selected'; ?>>Ficção</option>
            <option value="R" <?php if($genero=='R') echo 'selected'; ?>>Romance</option>
            <option value="O" <?php if($genero=='O') echo 'selected'; ?>>Outro</option>
        </select>
        <br><br>
        
        <input type="number" name="pag" placeholder="Informe a quantidade de páginas" value="<?= $qnt_pag ?>">
        <br><br>

        <input type="hidden" name="submetido" value="1">

        <button type="submit">Gravar</button>
        <button type="reset">Limpar</button>
    </form>

 <h3> Listagem de livros </h3>

 <table border="1px">
    <tr>
        <td>Título</td>
        <td>Gênero</td>
        <td>Páginas</td>
        <td></td>
    </tr>
    <?php foreach($livros as $l):?>
        <tr>
            <td><?= $l['titulo']?> </td>

            <td><?php
                switch($l['genero']){
                    case 'D': echo 'Drama';
                    break;

                    case 'F': echo 'Ficção';
                    break;

                    case 'R': echo 'Romance';
                    break;

                    case 'O': echo 'Outro';
                    break;

                    default;
                }
                ?>

            <td><?= $l['pag']?> </td>

            <td>
                <a href="livros_del.php?id=<?= $l['id'] ?>"
                    onclick="return confirm('Confirma a exclusão do livro?')">
                    Excluir
                </a>
            </td>

        </tr>

    <?php endforeach?>

    <div id="msg" style="color: darkred;">
        <?= $erro ?>
    </div>

 </table>

</body>
</html>