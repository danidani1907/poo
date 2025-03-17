// permite  criar classificção

class pessoa{
    constructor(nome){
        if(this.constructor === pessoa){
            throw new Error("não é possivel criar esse objeto");
        }
        this.nome = nome;
    }
}

class aluno extends pessoa{
    Aluno= () =>
        console.log(` meu nome é  ${ this.nome} sou estudante do ensino médio`)
        }

const Joao = new aluno("João")

Joao.Aluno();

try {
    const p = new pessoa("Rayanne", 40); // Isso vai gerar um erro
} catch (e) {
    console.log(e.message); // Isso vai capturar e exibir a mensagem de erro
}

