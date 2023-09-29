<?php

$alunos = array("ana" ,"maximillian","joao");

/*for($i=0;$i<count($alunos);$i++){
    echo $alunos[$i]." ";
}*/  //for normal

array_push($alunos,"willow");

print_r($alunos); //imprime elementos do array e suas posicoes

foreach($alunos as $a){
    echo $a." ";
}

?>