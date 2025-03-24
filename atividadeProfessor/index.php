<?php
class Pessoa{
    public $nome;
    public $idade;
    // private e para privar
    private $nota;
 
    
    public function __construct($nome){
     $this->nome = $nome;
     $this->idade = $idade;
     $this->nota = $nota;
    }
   
}
class Aluno extends pessoa {
    public function estudando() {
        echo "ola, sou {$this->nome} sou estudante e tenho{$this->idade}anos .<br>";
    }
}


class Professor extends pessoa {
    public function ensinando() {
        echo "sou {$this->nome}sou professor e tenho {$this->idade}.<br>";
    }
}

class Diretor extends pessoa {
    public function cordena() {
        echo "{$this->nome} ´é diretor/a{$this->idade}.<br>";
    }
}
class inspetor extends pessoa {
    public function cuida() {
        echo "ola sou{$this->nome} sou inspetor vigiando os alunos{$this->idade}.<br>";
    }
}
$Rayanne = new  Aluno("Rayanne", 17,9);
$Zani = new Aluno("Zani", 17,9);
$Joacir = new Professor("joacir",45);
$edivania = new Diretor ("edivania",87);
$Luzia = new inspetor("Luzia",70);

// Chamando os métodos

$Rayanne->estudando();
$Joacir->();
$Zani->estudando();



?>