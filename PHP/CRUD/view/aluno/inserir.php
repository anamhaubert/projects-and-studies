<?php

include_once(__DIR__."/../../model/Aluno.php");
include_once(__DIR__."/../../model/Curso.php");
include_once(__DIR__."/../../controller/AlunoController.php");

$msgErros = "";
$aluno=null;

if(isset($_POST['submetido'])){
    $nome = trim($_POST['nome']);
    $idade = is_numeric($_POST['idade'])?$_POST['idade'] : NULL;
    $est = trim($_POST['estrang']);
    $idcurso = is_numeric($_POST['curso'])?$_POST['curso'] : NULL;

    // echo $nome."-".$idade."-".$est."-".$idcurso;

    $aluno = new Aluno();
    $aluno->setNome($nome)->setIdade($idade)->setEstrangeiro($est);
    if($idcurso){
        $curso = new Curso();
        $curso->setId($idcurso);
        $aluno->setCurso($curso);
    }

    // print_r($aluno);

    $alunoCont = new AlunoController();
    $erros=$alunoCont->inserir($aluno);

    // print_r($erros);
    // exit;

    //caso nao tenha erros, redirecionar p listagem
    if(!$erros){
    header("location:listar.php");
    exit;}

    $msgErros = implode("<br>",$erros);
}
// $msgErros="";
include_once (__DIR__ . "/form.php");