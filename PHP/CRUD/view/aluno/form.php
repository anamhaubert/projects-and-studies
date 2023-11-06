<?php
include_once(__DIR__."/../../controller/CursoController.php");
$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
// print_r($cursos);
?>

<?php
include_once(__DIR__."/../include/header.php");
?>

<h3><?php echo ($aluno && $aluno->getId() > 0 ? 'Alterar ':'Inserir ')?>Aluno</h3>

<form method="POST" action="">

    <div>
        <label for="inpNome">Nome:</label>
        <input type="text" name="nome" id="inpNome" 
               value="<?php echo ($aluno ? $aluno->getNome():'');?>">
    </div>

    <div>
        <label for="inpIdade">Idade:</label>
        <input type="number" name="idade" id="inpIdade" style="width: 50px"
               value="<?php echo ($aluno ? $aluno->getIdade():'');?>">
    </div>

    <div>
        <label for="inpEstrang">Estrangeiro:</label>
        <select name="estrang" id="inpEstrang">
            <option value="">---Selecione---</option>
            <option value="S"
                <?php echo($aluno && $aluno->getEstrangeiro() == 'S' ? 'selected':'');?> >Sim</option>
            <option value="N"
                <?php echo($aluno && $aluno->getEstrangeiro() == 'N' ? 'selected':'');?>>Não</option>
        </select>
    </div>

    <div>
        <label for="inpCurso">Curso:</label>
        <select name="curso" id="inpCurso">

            <option value="">---Selecione---</option>
            <?php foreach($cursos as $cu):?>
                <option value=  "<?=$cu->getId()?>" 
                <?php if($aluno && $aluno->getCurso() && $aluno->getCurso()->getId() == $cu->getId())
                            echo 'selected';?>   >
                    <?= $cu->getNome()?>
                </option>
            <?php endforeach; ?>

        </select>
    </div>

    <button type="submit">Gravar</button>
    <button type="reset">Limpar</button>

    <input type="hidden" name="id_aluno" value="<?php echo($aluno ? $aluno->getId(): '') ?>">
    <input type="hidden" name="submetido" value="1">

</form>

<?php if($msgErros): ?>
    <div style="color:red">
        <?= $msgErros ?>
    </div>
<?php endif;?>

<a href="listar.php">Voltar</a>

<?php
include_once(__DIR__."/../include/footer.php");
?>