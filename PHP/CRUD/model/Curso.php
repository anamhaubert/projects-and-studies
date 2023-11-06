<?php

class Curso{
    private ?int $id;
    private ?string $nome;
    private ?string $curso;
    private ?string $turno;

    public function __toString(){
        return $this->nome;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
        return $this;
    }

    public function getTurno(){
        return $this->turno;
    }

    public function setTurno($turno){
        $this->turno = $turno;

        return $this;
    }
}