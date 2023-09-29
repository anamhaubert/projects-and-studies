<?php

/* 2. Faça um programa em PHP que declare dois arrays:
- O primeiro deve possuir 5 elementos representando palavras;
- O segundo deve ser vazio;
Após isso, percorra o 1º array e adicione cada um dos seus elementos no array que foi declarado vazio. 
Por fim, percorra o 2º array e imprima os seus elementos separados por virgula. */

$vetorx = array("Daniel","Ana Paula","Humberto","Julio","Juliana");
$vetory = array();

foreach($vetorx as $i){
    array_push($vetory,$i);
}

foreach($vetory as $i){
    echo "$i"."<br>";
}

?>