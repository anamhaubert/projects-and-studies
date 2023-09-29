public class Escola {
    private String nome;
    private String telefone;
    private int qtdeTurmas;
    private Turma[] vetTurmas;

    public Escola(){
        this.vetTurmas = new Turma[20];
    }

    public String getNome(){
        return nome;}

    public String getFone(){
        return telefone;
    }

    public void setNome(String n){
        this.nome = n;
    }

    public void setFone(String f){
        this.telefone = f;
    }

    public Turma getTurma(int pos){
        return this.vetTurmas[pos];
    }

    public void setTurma(Turma t){
        if(this.qtdeTurmas<20){
        this.vetTurmas[qtdeTurmas]=t;
        this.qtdeTurmas++;
    }
  }
  public int getQtdeTurmas(){
    return this.qtdeTurmas;
  }
}
