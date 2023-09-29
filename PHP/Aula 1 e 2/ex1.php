<?php 

/*1- Faça um programa em PHP que imprima como saída os números de
1 a 10 de três formas:
– Utilizando o comando WHILE
– Utilizando o comando DO-WHILE
– Utilizando o comando FOR*/

$n = 1;

echo "while"." ";
while($n<=10){
    echo "$n"." ";
    $n++;
}
$n = 1;

echo "<br>"."do while"." ";
do{
    echo "$n"." ";
    $n++;
}while($n<=10);

echo "<br>"."for"." ";
for($n=1;$n<=10;$n++)
echo "$n"." ";

?>