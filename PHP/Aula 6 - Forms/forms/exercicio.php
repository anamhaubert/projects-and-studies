<?php
$v1 = $_POST["valor1"];
$v2 = $_POST["valor2"]; 
$op = $_POST["operador"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>
</head>
<body>

<!-- Escreva um programa que simule o funcionamento de uma calculadora. A interface de possuir o
três campos, sendo:

Valor 1: deve ser informado um número
Valor 2: deve ser informado outro número
Operação: deve possibilitar ao usuário selecionar o as quatro operações: Soma, Subtração,
Multiplicação e Divisão.

Ao submeter o formulário, o programa deve mostrar o resultado da operação escolhida na mesma
interface onde foram informados os campos.

Também é necessário validar os campos (no backend), exibindo uma mensagem de erro caso algum
deles não tenha sido preenchido. -->

<form method="POST" action="exercicio.php">

    <br><br>
    <input name="valor1" type="number" placeholder="Informe o valor 1" />
    <br><br>
    <input name="valor2" type="number" placeholder="Informe o valor 2" />
    <br><br>

    <select name="operador">
        <option value="">---Selecione a operação---</option>
        <option value="Soma">Soma</option>
        <option value="Sub">Subtração</option>
        <option value="Mult">Multiplicação</option>
        <option value="Div">Divisão</option>
    </select>

    <br><br>
    <button type="submit">Enviar</button>

    <?php if(! $op): ?> <h5>operador não informado!</h5> <?php endif; ?>
    <?php if(! $v1): ?> <h5>Valor 1 não informado!</h5> <?php endif; ?>
    <?php if(! $v2): ?> <h5>Valor 2 não informado!</h5> <?php endif; ?>

    <?php if($v1 && $v2 && $op): ?>
    <?php
        if ($op=='Soma')
            $oper = $v1 + $v2; 

        if ($op=='Sub') 
            $oper = $v1 - $v2;

        if ($op=='Mult') 
            $oper = $v1 * $v2;

        if ($op=='Div') 
            $oper = $v1 / $v2; 
    ?>

    <h2>O resultado da operação é <?php echo $oper ?> </h2>

    <?php endif; ?>


</body>
</html>
