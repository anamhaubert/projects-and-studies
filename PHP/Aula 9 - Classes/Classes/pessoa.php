<?php

class Pessoa{
    private $nome;
    private $sobrenome;

    //construtor
    public function __construct($nome="",$sobrenome="")
    {
        $this->nome=$nome;
        $this->sobrenome=$sobrenome;
    }

    public function getNomeCompleto(){
        return $this->nome." ".$this->sobrenome;
    }

   public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
}

//script principal

$p1 = new Pessoa();
$p1->setNome("Ana");
$p1->setSobrenome("Manske");
echo $p1->getNomeCompleto();

echo "<br>";

$p2 = new Pessoa();
$p2->setNome("Joao")->setSobrenome("Correia");
echo $p2->getNomeCompleto();

echo "<br>";

$p3=new Pessoa("Willow","da Silva");
echo $p3->getNomeCompleto();
