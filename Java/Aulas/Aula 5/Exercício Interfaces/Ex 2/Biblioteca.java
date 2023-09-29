import java.io.BufferedReader;
import java.io.InputStreamReader;

public class Biblioteca{
    public static void main(String[] args) throws Exception {
        BufferedReader reader  = new BufferedReader(new InputStreamReader(System.in));
        Aluno a = new Aluno();

        System.out.println("digite o nome do aluno");
        a.setNome((reader.readLine()));

        System.out.println("digite o RA do aluno");
        a.setRa((reader.readLine()));

        a.retirarLivro();
    }
}
