public class Companhia {
    private String nome;
    private String telefone;
    private int qtdeVoos;
    private Voo[] vetVoos;

    public Companhia(){
        this.vetVoos = new Voo[500];
    }

    public String getNome(){
        return nome;
    }

    public String getFone(){
        return telefone;
    }

    public void setNome(String n){
        this.nome = n;
    }

    public void setFone(String f){
        this.telefone = f;
    }

    public Voo getVoos(int pos){
        return this.vetVoos[pos];
    }

    public void setVoos(Voo v){
        if(this.qtdeVoos<500){
        this.vetVoos[qtdeVoos]=v;
        this.qtdeVoos++;
    }
  }

    public int getQtdeVoos(){
        return this.qtdeVoos;
    }
}
