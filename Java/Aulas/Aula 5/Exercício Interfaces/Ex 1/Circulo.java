public class Circulo implements FormaGeometrica{

public static final float PI = 3.14f;
private float raio=3;

    public static float getPi() {
        return PI;
    }

    public float getRaio() {
        return raio;
    }

    public void setRaio(float raio) {
        this.raio = raio;
    }

    public float calcularArea() {
        
        return raio*raio*PI;
    }

}
