<?php

// Criar classe pessoa
// com parâmetros NOME e IDADE
// Criando a classe aluno
class pessoa {
    // Propriedades
    public $nome;
    public $idade;
    private $nota;


    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método para o aluno se apresentar
    public function apresentar() {
        echo "Olá, sou o {$this->nome} e tenho {$this->idade} anos.<br>";
    }
}

// Classe jogador para estender pessoa
class Aluno extends pessoa {
    public function estudando() {
        echo "{$this->nome} está estudando.<br>";
    }
}

// Classe técnico para estender pessoa
class Professor extends pessoa {
    public function ensinando() {
        echo "{$this->nome} está ensinando.<br>";
    }
}

// Criando instâncias de jogador e técnico
$Rayanne = new  Aluno("Rayanne", 31);
$Zani = new Professor("Zani", 52);

// Chamando os métodos
$Rayanne->apresentar();
$Rayanne->estudando();
$Zani->apresentar();
$Zani->ensinando();

?>  
