<?php

abstract class Pessoa{
    public $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Aluno extends Pessoa{
}

class Professor extends Pessoa{
    
}

$rafa = new Aluno ("Rafael",25);
echo $rafa->nome . "É ele";
?>