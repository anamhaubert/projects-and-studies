<?php

define("DIR_PERSIST",'arquivos/livros.json');

function salvarDados($array){
    $json = json_encode($array);
    file_put_contents(DIR_PERSIST, $json);
}

function buscarDados() : array{
    $inf = array();

    if(file_exists(DIR_PERSIST)){
        $infArq = file_get_contents(DIR_PERSIST);
        $inf = json_decode($infArq, true);
    }
    
    return $inf;
}