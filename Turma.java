public class Turma {
    private int numeroTurma;
    private String nomeCurso;
    private int ano;
    private int qtdeAlunos;
    private Aluno[] vetAlunos;

    //construtor
    public Turma(){
        this.vetAlunos= new Aluno[40];
        // this.qtdeAlunos=0; linha desnecessaria
    }

    public int getNumeroTurma(){
        return this.numeroTurma;
    }

    public void setNumeroTurma(int nt){
        this.numeroTurma=nt;
    }

    public String getNomeCurso(){
        return this.nomeCurso;
    }

    public void setNomeCurso(String nc){
        this.nomeCurso=nc;
    }

    public int getAno(){
        return this.ano;
    }

    public void setAno(int a){
        this.ano=a;
    }


    public Aluno getAluno(int pos){
        return this.vetAlunos[pos];
    }

    public void setAluno(Aluno a){
        if(this.qtdeAlunos<40){
        this.vetAlunos[qtdeAlunos]=a;
        this.qtdeAlunos++;
    }
  }
  public int getQtdeAlunos(){
    return this.qtdeAlunos;
  }
}
