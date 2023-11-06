<?php

include_once(__DIR__."/../../controller/AlunoController.php");
include_once(__DIR__."/../../model/Aluno.php");

$msgErros = "";
$aluno=null;

if(isset($_POST['submetido'])){
    $idAluno = $_POST['id_aluno'];
    $nome = trim($_POST['nome']);
    $idade = is_numeric($_POST['idade'])?$_POST['idade'] : NULL;
    $est = trim($_POST['estrang']);
    $idcurso = is_numeric($_POST['curso'])?$_POST['curso'] : NULL;

    $aluno = new Aluno();
    $aluno->setNome($nome)->setIdade($idade)->setEstrangeiro($est)->setId($idAluno);
    if($idcurso){
        $curso = new Curso();
        $curso->setId($idcurso);
        $aluno->setCurso($curso);
    }

    $alunoCont = new AlunoController();
    $erros=$alunoCont->alterar($aluno);

    if(!$erros){
    header("location:listar.php");
    exit;}

    $msgErros = implode("<br>",$erros);
}

else{
$msgErros="";
$idAluno = 0;

if(isset ($_GET['id']))
    $idAluno = $_GET['id'];

$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($idAluno);

if(!$aluno){
    echo "aluno não encontrado<br>";
    echo "<a href='listar.php'>Voltar</a>";
}
}

include_once(__DIR__."/form.php");
