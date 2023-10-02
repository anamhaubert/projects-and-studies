public class EncomendaBase {
    private String numPed;
    private float peso;
    private String dataPost;
    
    public String getNumPed() {
        return numPed;
    }
    public void setNumPed(String numPed) {
        this.numPed = numPed;
    }
    public float getPeso() {
        return peso;
    }
    public void setPeso(float peso) {
        this.peso = peso;
    }
    public String getDataPost() {
        return dataPost;
    }
    public void setDataPost(String dataPost) {
        this.dataPost = dataPost;
    }

    public float calcularFrete (Float peso, Float preco){
         return preco*peso;}

}
