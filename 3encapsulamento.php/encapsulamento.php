<?php
class Aluno{
    public $nome;
    public $idade;
    // private e para privar
    private $nota;

    public function __construct($nome, $idade, $nota){
     $this->nome = $nome;
     $this->idade = $idade;
     $this->nota = $nota;
    }
    public function verNota(){
        return $this->nota;
    }
}

    $alexandre = new Aluno("Zani",8,8);

    echo $alexandre->nome;
    echo$alexandre->verNota();
?>