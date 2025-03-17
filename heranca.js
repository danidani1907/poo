//criar classe pessoa 
//com parametros nome e idade
//criar um metodo para apresentar
//olá, sou nome e tenho idade anos

class Pessoa{
    constructor(nome,idade){
        this.nome = nome;
        this.idade = idade;
    }      
}
apresentar = () => console.log (`Ola, sou ${this.nome} e tenho ${this.idade}`);


lucas.apresentar();

class Aluno extends Pessoa{
    estudar = () => console.log(`${ this.nome} esta estudando`)
}
class Professor extends Pessoa{
    ensinar = () =>
console.log(`${ this.nome} esta ensinando`)
}

const lucas = new Aluno("lucas", 17)

const raul = Professor ("Raul", 28)


lucas.apresentar();
raul.apresentar();
lucas.estudar();
raul.Professor();
