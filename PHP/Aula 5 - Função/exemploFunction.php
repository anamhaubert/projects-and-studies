<?php

function imprime($p){
    echo $p."<br>";
}

function subtracao(int $v1,int $v2):int{
    return $v1 - $v2;
}

imprime("i know places");
imprime("we could hide");

imprime(subtracao(4,2));
?>