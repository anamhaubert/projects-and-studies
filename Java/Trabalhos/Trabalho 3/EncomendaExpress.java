public class EncomendaExpress extends EncomendaBase {
    private int prazo;
    private String fone;
    private float frete;

    public float calcularFrete (int prazo, Float peso, Float preco){
        if (prazo<=2){
            frete= preco * peso ;
            frete+=0.25f*frete;
        }
        else 
            frete = preco * peso ;
        
            return frete;
     }

    public int getPrazo() {
        return prazo;
    }
    public void setPrazo(int prazo) {
        this.prazo = prazo;
    }
    public String getFone() {
        return fone;
    }
    public void setFone(String fone) {
        this.fone = fone;
    }

}
