<?php
/* 2- Faça um programa em PHP que organize os dados da tabela abaixo na forma de um array com chaves. 
Depois, percorra esse array e mostre seus dados em uma tabela utilizando PHP e HTML. 

Nome                Endereço         Cidade        UF
Manuel de Medeiros Rua das Acácias   Foz do Iguaçu PR
Juliana de Amaral  Rua dos Pinheiros Florianópolis SC
Rodrigo Baidek     Rua Dom Pedro I   Petrópolis    RJ
Fabíola da Silva   Rua Chile         Guarulhos     SP  */


$linha1 = array("nome" => "Manuel de Medeiros", 
                "endereco" => "Rua das Acácias",
                "cidade" => "Foz do Iguaçu",
                "UF" => "PR");

$linha2 = array("nome" => "Juliana de Amaral", 
                "endereco" => "Rua dos Pinheiros",
                "cidade" => "Florianópolis",
                "UF" => "SC");

$linha3 = array("nome" => "Rodrigo Baidek", 
                "endereco" => "Rua Dom Pedro I",
                "cidade" => "Petrópolis",
                "UF" => "RJ"); 

$linha4 = array("nome" => "Fabíola da Silva", 
                "endereco" => "Rua Chile",
                "cidade" => "Guarulhos",
                "UF" => "SP");       

/* echo "<table border=1>";

    echo "<tr>";
        foreach($linha1 as $c => $l1)
        echo "<td>".$c."</td>";
    echo "</tr>";

    echo "<tr>";
        foreach($linha1 as $c => $l1)
        echo "<td>".$l1."</td>";
    echo "</tr>";

    echo "<tr>";
        foreach($linha2 as $c => $l2)
        echo "<td>".$l2."</td>";
    echo "</tr>";

    echo "<tr>";
        foreach($linha3 as $c => $l3)
        echo "<td>".$l3."</td>";
    echo "</tr>";

    echo "<tr>";
        foreach($linha4 as $c => $l4)
        echo "<td>".$l4."</td>";
    echo "</tr>";

echo "</table>"; */   //jeito rudimentar

$tabela = array($linha1,$linha2,$linha3,$linha4);

echo "<table border=1>";

    echo "<tr>";
        foreach($linha1 as $c => $l1)
            echo "<td>".$c."</td>";
    echo "</tr>";

    foreach($tabela as $i){
        echo "<tr>";
            foreach($i as $col)
            echo "<td>".$col."</td>";
        echo "</tr>";
    }

echo "</table>";

?>