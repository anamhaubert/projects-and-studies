<?php
    $nome="";
    $idade="";
    $erro="";

    if(isset($_POST['submetido'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if(!trim($nome))
        $erro = 'informe o nome';

        else if(!trim($idade))
        $erro = 'informe a idade';

        else {echo $nome." ".$idade;
              $nome='';
              $idade='';}
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacao</title>
</head>
<body>
    <h1>Formulario a validar</h1>
    
    <form method="POST">
        <input type="text" placeholder="Nome:" id = "name" name="nome"value="<?= $nome ?>"/>
        <br><br>

        <input type="number" name="idade" id="age" placeholder="Idade:" value="<?= $idade ?>"/>
        <br><br>

        <button type="submit">Enviar</button>
        <input type="hidden" name="submetido" value="1"/>

    </form>

    <div id="msg" style="color: darkred;">
        <?= $erro ?>
    </div>

<script src="validacao.js">

</script>

</body>
</html>