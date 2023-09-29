public class Retangulo implements FormaGeometrica{
    private float lado;
    private float largura;

    public float getLado() {
        return lado;
    }
    public void setLado(float lado) {
        this.lado = lado;
    }
    public float getLargura() {
        return largura;
    }
    public void setLargura(float largura) {
        this.largura = largura;
    }
    
    public float calcularArea() {
        
        return lado*largura;
    }

}