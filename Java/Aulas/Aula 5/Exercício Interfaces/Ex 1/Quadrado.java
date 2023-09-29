public class Quadrado implements FormaGeometrica{
    private float lado;
    
    public float getLado() {
        return lado;
    }

    public void setLado(float lado) {
        this.lado = lado;
    }

    public float calcularArea() {
        
        return lado*lado;
    }

}
