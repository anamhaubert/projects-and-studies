<?php

include_once(__DIR__."/../dao/AlunoDAO.php");
include_once(__DIR__."/../model/Aluno.php");
include_once(__DIR__."/../service/AlunoService.php");

class AlunoController{

    private AlunoDAO $alunoDAO;
    private AlunoService $alunoSer;

    public function __construct(){
        $this ->alunoDAO = new AlunoDAO();
        $this ->alunoSer = new AlunoService();
    }

    public function listar()  {
        return $this->alunoDAO->list();
    }

    public function inserir(Aluno $aluno){
        $erros = $this->alunoSer->validarDados($aluno);

        if ($erros) return $erros;
        
        $this->alunoDAO->insert($aluno);

        return array();
    }

    public function alterar(Aluno $aluno){
        $erros = $this->alunoSer->validarDados($aluno);

        if ($erros) return $erros;
        
        $this->alunoDAO->update($aluno);

        return array();
    }

    public function buscarPorId(int $idAluno){
        return $this->alunoDAO->findById($idAluno);
    }

    public function excluirPorId(int $idAluno){
        $this->alunoDAO->deleteById($idAluno);
    }
}
