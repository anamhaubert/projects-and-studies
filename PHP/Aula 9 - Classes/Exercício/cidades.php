<?php

class Estado{
    private $nome;
    private $sigla;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
    
    public function getSigla() {
        return $this->sigla;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
        return $this;
    }
}

class Cidade{
    private $nome;
    private $qtdHabitantes;
    private $areaTerritorial;
    private $altitude;
    private $estado;

    public function __construct($n,$qh,$ar,$al,$e) {
        $this->nome=$n;
        $this->qtdHabitantes=$qh;
        $this->areaTerritorial=$ar;
        $this->altitude=$al;
        $this->estado=$e;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getQtdHabitantes(){
        return $this->qtdHabitantes;
    }

    public function setQtdHabitantes($qtdHabitantes) {
        $this->qtdHabitantes = $qtdHabitantes;
        return $this;
    }

    public function getAreaTerritorial(){
        return $this->areaTerritorial;
    }

    public function setAreaTerritorial($areaTerritorial) {
        $this->areaTerritorial = $areaTerritorial;
        return $this;
    }

    public function getAltitude(){
        return $this->altitude;
    }

    public function setAltitude($altitude){
        $this->altitude = $altitude;
        return $this;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
        return $this;
    }
}

$sc = new Estado();
$sc->setNome("Santa Catarina")->setSigla("SC");

$pr = new Estado();
$pr->setNome("Paraná")->setSigla("PR");

$foz = new Cidade("Foz do Iguaçu",250000,500,145,$pr);
$casc = new Cidade("Cascavel",300000,420,320,$pr);
$chap = new Cidade("Chapecó",240000,120,620,$sc);

$cidades=array($foz,$casc,$chap); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>
<body>
    <table border="1">

        <tr>
            <th>nome</th>
            <th>habitantes</th>
            <th>area</th>
            <th>altitude</th>
            <th>estado</th>
        </tr>

        <?php foreach($cidades as $c):?>
            <tr>
                <td><?php echo $c->getNome();?></td>
                <td><?php echo $c->getQtdHabitantes();?></td>
                <td><?php echo $c->getAreaTerritorial();?></td>
                <td><?php echo $c->getAltitude();?></td>
                <td><?php echo $c->getEstado()->getNome().'-'.
                               $c->getEstado()->getSigla();?>
                </td>
            </tr>
        <?php endforeach;?>

    </table>
</body>
</html>

