public class Aluno {
    private String nome;
    private String matricula;
    private float nota1;
    private float nota2;
    private float nota3;
    private float nota4;

    //metodo getter
    //serve para retornar o valor de um atribulo
    public String getNome(){
        return this.nome;
        //this faz referencia a um atributo ou metodo
        //declarado no escopo da classe
    }

     public String getMatricula(){
        return this.matricula;
    }

    public float getNota1(){
        return this.nota1;
    }

    public float getNota2(){
        return this.nota2;
    }

    public float getNota3(){
        return this.nota3;
    }

    public float getNota4(){
        return this.nota4;
    }

    //metodo setter
    //atribui um valor a um atributo - guardar informacao
    public void setNome(String n){
        this.nome=n;
    }

    public void setMatricula(String n){
        this.matricula=n;
    }

    public void setNota1(float n){
        this.nota1=n;
    }

     public void setNota2(float n){
        this.nota2=n;
    }

     public void setNota3(float n){
        this.nota3=n;
    }

     public void setNota4(float n){
        this.nota4=n;
    }

    public float calcularMedia(){
        return (this.nota1 + this.nota2 + this.nota3 + this.nota4)/4;
    }
    
    }
