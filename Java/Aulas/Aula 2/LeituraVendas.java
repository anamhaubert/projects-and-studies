import java.io.BufferedReader;
import java.io.FileReader;

public class LeituraVendas{
    public static void main(String[] args) throws Exception{
        String nomeArquivo = "vendas.csv";
        BufferedReader arqLeitura = new BufferedReader(new FileReader(nomeArquivo));

        int cont = 0;
        float soma = 0;
        float somaVista = 0;
        float somaPrazo = 0;
        String linha;
        String array[] = new String[4];

        arqLeitura.readLine();

        while((linha = arqLeitura.readLine()) != null){
            array=linha.replace(",",".").split(";");
            soma += Float.parseFloat(array[2]);

        if(array[3].equals("P"))
            somaPrazo += Float.parseFloat(array[2]);

        if(array[3].equals("V"))
            somaVista += Float.parseFloat(array[2]);

            cont++;
        }

        System.out.println("a quantidade de vendas realizadas é " + cont);
        System.out.println("o valor total de vendas é R$" + soma);
        System.out.println("o valor total de vendas a Prazo é R$" + somaPrazo);
        System.out.println("o valor total de vendas a Vista é R$" + somaVista);

        arqLeitura.close();
    }
}