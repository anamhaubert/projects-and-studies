<?php
    $nome="";
    $idade="";

    if(isset($_POST['submetido'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        echo $nome." ".$idade;
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
    
    <form method="POST" onsubmit="return validar();">
        <input type="text" placeholder="Nome:" id = "name" name="nome"/>
        <br><br>

        <input type="number" name="idade" id="age" placeholder="Idade:">
        <br><br>

        <button type="submit">Enviar</button>
        <input type="hidden" name="submetido" value="1"/>

    </form>

    <div id="msg" style="color: darkred;"></div>

<script src="validacao.js">

</script>

</body>
</html>