class pessoa {
    constructor(nome,idade){
        this.nome = nome;
        this.idade = idade;
    
};
    apresentar = ()=> console.log
}

class aluno extends pessoa{
    apresentar = () =>
        console.log(` meu nome é  ${ this.nome} sou aluno e tenho ${this.idade} anos`)
        }



class Professor extends pessoa{
    apresentar = () => console.log(` meu nome é  ${ this.nome} sou professora e tenho ${this.idade} anos`)
        }


const Eduardo = new aluno("Eduardo", 15)

const Maria = new Professor ("Maria", 45)

Eduardo.apresentar();
Maria.apresentar();


// explicção poliformismo 
//-pessoa tem um metodo padrão apresentar ()
//aluno e professor herdam esse metodo, mas reescrevem, para exibir msg diferentes
//mesmo metodo, e comportamentos diferentes isso é poliformismo


