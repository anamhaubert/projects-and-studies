public class Voo {
    private int numeroVoo;
    private String partida;
    private String destino;
    private String data;
    private String hora;
    private int qtdePassageiros;
    private Passageiro[] vetPassageiros;

    //construtor
    public Voo(){
        this.vetPassageiros= new Passageiro[300];
    }

    public int getNumeroVoo(){
        return this.numeroVoo;
    }

    public void setNumeroVoo(int nv){
        this.numeroVoo=nv;
    }

    public String getPartida(){
        return this.partida;
    }

    public void setPartida(String p){
        this.partida=p;
    }

    public String getData(){
        return this.data;
    }

    public void setData(String d){
        this.data=d;
    }

    public String getDestino(){
        return this.destino;
    }

    public void setDestino(String d){
        this.destino=d;
    }

    public String getHora(){
        return this.hora;
    }

    public void setHora(String h){
        this.hora=h;
    }

    public Passageiro getPassageiro(int pos){
        return this.vetPassageiros[pos];
    }

    public void setPassageiro(Passageiro a){
        if(this.qtdePassageiros<300){
        this.vetPassageiros[qtdePassageiros]=a;
        this.qtdePassageiros++;
    }
  }

     public int getQtdePassageiros(){
        return this.qtdePassageiros;
    }
}
