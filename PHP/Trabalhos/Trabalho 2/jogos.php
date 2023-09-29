<?php

    include_once("persistencia.php");
    $jogos = buscarDados();

    $nome="";
    $genero="";
    $console="";
    $ano="";
    $erro="";

    if(isset($_POST['submetido'])){
        $nome = $_POST['nome'];
        $ano = $_POST['ano'];
        $console = $_POST['console'];
        $genero = $_POST['genero'];

        if(!trim($nome))
        $erro = 'informe o nome';

        else if(!trim($ano))
        $erro = 'informe o ano de publicacao';

        else if($ano<0)
        $erro = 'informe um ano válido';

        else if(!trim($genero))
        $erro = 'informe o genero do jogo';

        else if(!trim($console))
        $erro = 'informe o console';
        
            else{$id = vsprintf( '%s%s-%s-%s-%s-%s%s%s',
            str_split(bin2hex(random_bytes(16)), 4) );
        
            $dados = array('nome' => $nome, 'genero' => $genero, 'ano' => $ano, 'console'=>$console, 'id'=>$id);
        
            array_push($jogos,$dados);
        
            salvarDados($jogos);
            $nome="";
            $genero="";
            $ano="";
            $console="";
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabalho 2</title>
</head>
<body>
    <h1>Cadastro de Jogos</h1>
    
    <form method="POST">
        <input type="text" placeholder="Nome:" id ="name" name="nome" value="<?= $nome ?>"/>
        <br><br>

        <input type="number" name="ano" id="year" placeholder="Ano de Publicação:" value="<?= $ano ?>"/>
        <br><br>

        <select name="genero" value="<?= $genero ?>">
            <option value="">---Selecione o gênero de videogame---</option>
            <option value="F" <?php if($genero=='F') echo 'selected'; ?>>FPS</option>
            <option value="BR" <?php if($genero=='BR') echo 'selected'; ?>>Battle Royale</option>
            <option value="P" <?php if($genero=='P') echo 'selected'; ?>>PVP</option>
            <option value="R" <?php if($genero=='R') echo 'selected'; ?>>RPG</option>
            <option value="O" <?php if($genero=='O') echo 'selected'; ?>>Outro</option>
        </select>
        <br><br>

        <select name="console" value="<?= $console ?>">
            <option value="">---Selecione o console de videogame---</option>
            <option value="PS" <?php if($console=='PS') echo 'selected'; ?>>PlayStation</option>
            <option value="X" <?php if($console=='X') echo 'selected'; ?>>Xbox</option>
            <option value="NS" <?php if($console=='NS') echo 'selected'; ?>>Nintendo Switch</option>
            <option value="O" <?php if($console=='O') echo 'selected'; ?>>Outro</option>
        </select>
        <br><br>

        <button type="submit">Gravar</button>
        <button type="reset">Limpar</button>
        <input type="hidden" name="submetido" value="1"/>

    </form>

    <div id="msg" style="color: darkred;">
        <?= $erro ?>
    </div>

    <h3> Listagem de jogos </h3>

 <table border="1px">

    <tr>
        <td>Nome</td>
        <td>Gênero</td>
        <td>Ano de publicação</td>
        <td>Console</td>
        <td></td>
    </tr>

    <?php foreach($jogos as $j):?>
        <tr>
            <td><?= $j['nome']?> </td>

            <td><?php
                switch($j['genero']){
                    case 'F': echo 'FPS';
                    break;

                    case 'BR': echo 'Battle Royale';
                    break;

                    case 'P': echo 'PVP';
                    break;

                    case 'R': echo 'RPG';
                    break;

                    case 'O': echo 'Outro';
                    break;

                    default;
                }
                ?>

            <td><?= $j['ano']?> </td>

            <td><?php
                switch($j['console']){
                    case 'PS': echo 'PlayStation';
                    break;

                    case 'X': echo 'Xbox';
                    break;

                    case 'NS': echo 'Nintendo Switch';
                    break;

                    case 'O': echo 'Outro';
                    break;

                    default;
                }
                ?>

            <td>
                <a href="jogosDel.php?id=<?= $j['id'] ?>"
                    onclick="return confirm('Confirma a exclusão do jogo?')">
                    Excluir
                </a>
            </td>

        </tr>

    <?php endforeach;?>

 </table>

</body>
</html>