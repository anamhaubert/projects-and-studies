<?php

/*2- Faça um programa que declare uma classe Livro com os atributos título, autor, gênero e quantidade de páginas. 
Após:
– 2.1: Crie 3 objetos a partir da classe livros;
– 2.2: Adicione os objetos em um array;
– 2.3: A partir do array, exiba os atributos dos objetos Livro em uma tabela.*/

class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $qnt_pag;

    
    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
        return $this;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
        return $this;
    }

    public function getQnt_pag(){
        return $this->qnt_pag;
    }

    public function setQnt_pag($qnt_pag){
        $this->qnt_pag = $qnt_pag;
        return $this;
    }
}

$livro1 = new Livro();
$livro1->setAutor("JK Rowling")->setGenero("Fantasia")->setQnt_pag("200")->setTitulo("Harry Potter");

$livro2 = new Livro();
$livro2->setAutor("George Orwell")->setGenero("Fantasia")->setQnt_pag("150")->setTitulo("A Revolução dos Bichos");

$livro3 = new Livro();
$livro3->setAutor("CJ Turdor")->setGenero("Terror")->setQnt_pag("250")->setTitulo("O Homem de Giz");

$books = array($livro1,$livro2,$livro3); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
</head>
<body>

<table border="1px">
    <tr>
        <td>Autor</td>
        <td>Gênero</td>
        <td>Quantidade de Páginas</td>
        <td>Título</td>
    </tr>

    <?php foreach ($books as $b):?>

        <tr>
            <td> <?= $b->getAutor()?> </td>
            <td> <?= $b->getGenero()?> </td>
            <td> <?= $b->getQnt_pag()?> </td>
            <td> <?= $b->getTitulo()?> </td>
            
        </tr>

    <?php endforeach;?>

 </table>

</body>
</html>