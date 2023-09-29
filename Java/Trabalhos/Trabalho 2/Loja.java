import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.InputStreamReader;

public class Loja {
    public static void main(String[] args) throws Exception{

        //gravar
        String nomeArqV = "preco_venda.csv";
        BufferedWriter gravaArq = new BufferedWriter(new FileWriter(nomeArqV));

        //ler variavel
        BufferedReader reader  = new BufferedReader(new InputStreamReader(System.in));

        //ler arquivo
        String nomeArqC = "preco_custo.csv";
        BufferedReader lerArq = new BufferedReader(new FileReader(nomeArqC));

        String linhaV = "codigo;nome_produto;preco_venda";
        gravaArq.write(linhaV);
        gravaArq.newLine();
        
        float lucro = 0;
        System.out.println("digite a margem de lucro a ser aplicada (em %)");
        lucro = Float.parseFloat(reader.readLine());

        String coluna[] = new String[5];

        lerArq.readLine();

        String linhaC ="";
        float novo = 0;
        String cod ="";
        String name="";
        float preco = 0;

        while((linhaC = lerArq.readLine()) != null){
            coluna=linhaC.replace(",",".").split(";");
            preco = Float.parseFloat(coluna[3]);
            
            novo= (lucro*(0.01f)*preco)+preco;
            cod = coluna[0];
            name = coluna[2];
            
            linhaV = cod+";"+ name+";"+String.format("%.02f",novo);
            gravaArq.write(linhaV);
            gravaArq.newLine();
        }

        lerArq.close();
        gravaArq.close();

    }
}