<?php
$log = $_POST["login"];
$sen = $_POST["senha"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<!-- Desafio: crie um formulário que receba o login e a senha de um
usuário. Se o login informado for “ifpr” e a senha “tads”, exiba uma
mensagem na tela de “Bem vindo ao TADS!” e esconda o
formulário. Dica: a action do formulário deve chamar a mesma
página. -->

    <?php if($log=='ifpr' && $sen=='tads'): ?>  
            <div>
                <h1>Bem vindo ao TADS!</h1>
            </div> 

    <?php else: ?>
    <form method="POST" action="desafio.php">
        
        <input type="text" name="login" placeholder="informe o login">
        <br><br>
        <input type="text" name="senha" placeholder="informe a senha">
        <br><br>
        <button type="submit">enviar</button>
        
    </form>
    
    <?php endif; ?>

</body>
</html>

