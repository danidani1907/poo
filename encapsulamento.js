class aluno{
    #nota
    constructor(nome,idade, nota){
        this.nome = nome;
        this.idade = idade;
        this.#nota = nota;
    }
    estudar = () => console.log(`${this.nome} tirou ${this.#nota} e tem ${this.idade}.anos`) ;
    verNota = () =>this.#nota
};

const Zani = new aluno ("Zani" , 17, 90)
Zani.estudar();


