public class Loja {
    public static void main(String[] args) {
        Vendedor v1 = new Vendedor();

        //OVERLOAD
        float comissao1 = v1. calcularComissao(500.0f, 0.15f);
        System.out.println(comissao1);

        float comissao2 = v1. calcularComissao(200.0f);
        System.out.println(comissao2);
    }
}
