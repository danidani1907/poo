

<?php

class Aluno {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function estudar(){
        echo "{$this->nome} está estudando e tem {$this->idade}";
    }
}

$Ray= new Aluno("Rayanne",99);
$Lais = new Aluno("Lais",16);

$Ray->estudar();
$Lais->estudar();

?>






