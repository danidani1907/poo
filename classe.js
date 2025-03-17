class aluno{
    constructor(nome,idade){
        this.nome = nome;
        this.idade = idade;
    }
    estudar = () => console.log(`${this.nome} esta estudando.`);
    feliz = () => console.log(`${this.nome} esta feliz.`);
};
console.log(aluno.nome);

const Zani = new aluno ("Zani" , 17)

Zani.estudar();

const Ray = new aluno("Ray",98)
console.log(Ray.nome)
console.log(Ray.idade)

Ray.feliz();
