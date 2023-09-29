public class Heranca {
    public static void main(String[] args) throws Exception {
        Pessoa p1 = new Pessoa();
        p1.setNome("Joao");
        p1.setEmail("joao@gmail.com");
        p1.setIdade(12);
        System.out.println(p1.getNome());

        Pessoa p2 = new Pessoa("Maria","maria@gmail.com",12);
        System.out.println(p2.getNome());

        Aluno a1 = new Aluno();
        a1.setNome("Calvin");
        a1.setEmail("calvo@gmail.com");
        a1.setIdade(21);
        a1.setNota1(7.4f);
        a1.setNota2(7.5f);
        a1.setNota3(5f);
        a1.setNota4(9.5f);

        System.out.println("aluno: " + a1.getNome());
        System.out.println("media do aluno: " + String.format("%.01f", a1.calcularMedia() ));

    }
}
