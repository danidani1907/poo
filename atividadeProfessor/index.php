<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


    <title>escola dos sesianos</title>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>escola</h1>
    </header>

    <main><div id="respostas" class="container ms-2 d-flex flex-column">
    </div></main>

  
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
$Joacir->ensinando();
$Zani->estudando();
$edivania->cordena();
$Luzia->cuida();



?>

</body>
</html>