<?php

/* 4. Escreva um programa que declare um array associativo em PHP para carros contemplando os 
campos: modelo, marca e link para uma foto. 
Devem ser criados 5 carros. 
Após isso, utilize laços para criar um card (utilizando uma DIV) para cada carro */

$linha1 = array("modelo" => "Fusca",
                "marca" => "VolksWagen",
                "img" => "https://revistacarro.com.br/wp-content/uploads/2020/01/VW-Fusca.jpg");

$linha2 = array("modelo" => "Corsa",
                "marca" => "Chevrolet",
                "img" => "https://www.carrosegaragem.com.br/wp-content/uploads/2022/09/corsa-autoclutch-capa.jpg");

$linha3 = array("modelo" => "Chevette",
                "marca" => "Chevrolet",
                "img" => "https://quatrorodas.abril.com.br/wp-content/uploads/2019/11/hr_8387.cr2_-e1574446155118.jpg?quality=70&strip=info");

$linha4 = array("modelo" => "Tucson",
                "marca" => "Hyundai",
                "img" => "https://quatrorodas.abril.com.br/wp-content/uploads/2018/02/t233ucson-2-0-modelo-2008-da-hyundai-durante-teste-da-revista-quatro-rodas-e1530575510801.jpg?quality=70&strip=info");

$linha5 = array("modelo" => "Gol",
                "marca" => "Volkswagen",
                "img" => "https://onlycars.com.br/wp-content/uploads/2020/06/foto-gol-bola-rebaixado-azul-450x274.jpg");

$tabela = array($linha1,$linha2,$linha3,$linha4,$linha5);


     foreach($tabela as $i){
    echo "<div style='width:200px; border:1px solid; margin-top: 20px;'>";
         echo $i['modelo']."<br>";
         echo $i['marca']."<br>";
         echo '<img src="'.$i['img'].'"style="width:100%;">';
    echo "</div>";}        
    
?>