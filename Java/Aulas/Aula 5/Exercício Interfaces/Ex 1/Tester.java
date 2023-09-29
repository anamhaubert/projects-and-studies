import java.io.BufferedReader;
import java.io.InputStreamReader;

public class Tester {
    public static void main(String[] args) throws Exception{

        BufferedReader reader  = new BufferedReader(new InputStreamReader(System.in));
        Quadrado q = new Quadrado();
        Retangulo r = new Retangulo();
        Circulo c = new Circulo();

        System.out.println("digite o lado do quadrado");
        q.setLado(Float.parseFloat(reader.readLine()));
        System.out.println("a area do quadrado é " + q.calcularArea());

        System.out.println("digite a altura e a largura do retangulo");
        r.setLado(Float.parseFloat(reader.readLine()));
        r.setLargura(Float.parseFloat(reader.readLine()));
        System.out.println("a area do retangulo é " + r.calcularArea());

        System.out.println("digite o raio do circulo");
        c.setRaio(Float.parseFloat(reader.readLine()));
        System.out.println("a area do circulo é " + c.calcularArea());
    }
}
