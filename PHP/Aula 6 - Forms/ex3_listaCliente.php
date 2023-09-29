<?php

/*
3. Crie uma página PHP onde está declarado um array com 100 números (de 0 a 100). A página
deve exibir os números deste array, um abaixo do outro.
A página também deve receber filtros pelo método GET, sendo:

numIni = representa o número inicial a ser exibido
numFim = representa o número final a ser exibido

Neste sentido, faça a exibição dos números do array de acordo com os filtros recebidos, sendo:
- Se não forem recebidos filtros, exiba todos os números do array;
- Se for recebido apenas o numIni, exiba os números a partir desse número até o final do array;
- Se for recebido apenas o numFim, exiba os números a partir do primeiro até chegar em numFim;
- Se for recebido numIni e numFim, exibir os apenas os números dentro o intervalo.

Dica: para gerar o array de 0 a 100, utilize a função range(0,100);
Dica 2: para verificar se um parâmetro foi recebido, utilize a função isset($var):

if(isset($_GET[‘chave’]))
echo ‘Recebido’;
else
echo “Não recebido”

*/

$numeros = range(0,100);

$numIni = 0;
if(isset($_GET['numIni']))
    $numIni = $_GET['numIni'];

    //echo $numIni;
    //echo "<br>";

$numFim = 100;
if(isset($_GET['numFim']))
    $numFim = $_GET['numFim'];

    //echo $numFim;

//imprimir array
    for ($i=$numIni; $i <= $numFim ; $i++) { 
        echo $numeros[$i]."<br>";
    }



?>