<?php
class Pessoa{
    public $nome;
   
 
    
    public function __construct($nome){
     $this->nome = $nome;
     
    }
    public function Apresentar(){
        echo"ola, sou{$this->nome}";

    }
}

//   a classe aluno herda de pessoa e sobrescreve o metodo aprrsentar
    class Aluno extends Pessoa{
        public function apresentar(){
            echo"oi meu nome é {$this->nome} e sou aluno";
        }
    }  

        class professor extends Pessoa{
            public function apresentar(){
                echo"oi sou {$this->nome} e e sou professor";
            }
        }

        $branco = new Aluno("Branco",17);
        $marcos = new professor("Marcos",90);

        echo $branco->apresentar();
        echo $marcos->apresentar():

?>