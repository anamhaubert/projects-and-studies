import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.InputStreamReader;

public class Loja2 {
    public static void main(String[] args) throws Exception{
        BufferedReader reader  = new BufferedReader(new InputStreamReader(System.in));

        String nomeArqS = "";
        String nomeArqE = "";

        System.out.println("digite o nome do arquivo de entrada");
        nomeArqE = reader.readLine();

        System.out.println("digite o nome do arquivo de saida");
        nomeArqS = reader.readLine();

        if(nomeArqE.isEmpty()){
            nomeArqE="preco_custo";
        }

        if(nomeArqS.isEmpty()){
            nomeArqS="preco_venda";
        }

        String type = ".csv";
        nomeArqE = nomeArqE.concat( type ) ;
        nomeArqS = nomeArqS.concat( type ) ;

        BufferedWriter gravaArq = new BufferedWriter(new FileWriter(nomeArqS));
        BufferedReader lerArq = new BufferedReader(new FileReader(nomeArqE));

        String nomeArqComprar = "comprar.csv";
        BufferedWriter gravaArq2 = new BufferedWriter(new FileWriter(nomeArqComprar));

        String linhaS = "codigo;nome_produto;preco_venda";
        gravaArq.write(linhaS);
        gravaArq.newLine();

        float lucro = 0;
        System.out.println("digite a margem de lucro a ser aplicada (em %)");
        lucro = Float.parseFloat(reader.readLine());

        String linhaS2 = "codigo;estoque;produto;preco_custo;categoria";
        gravaArq2.write(linhaS2);
        gravaArq2.newLine();

        String coluna[] = new String[5];

        lerArq.readLine();

        String linhaE ="";
        String cod ="";
        int estoq =0;
        String categ ="";
        String name="";
        float preco = 0;
        float novo = 0;

        while((linhaE = lerArq.readLine()) != null){
            
            coluna=linhaE.replace(",",".").split(";");
            estoq = Integer.parseInt(coluna[1]);
            preco = Float.parseFloat(coluna[3]);

            novo= (lucro*(0.01f)*preco)+preco;
            cod = coluna[0];
            name = coluna[2];
            categ = coluna[4];
            
            linhaS = cod+";"+ name+";"+String.format("%.02f",novo);
            gravaArq.write(linhaS);
            gravaArq.newLine();

            if(estoq<10){
            
            linhaS2 = cod + ";" + estoq + ";" + name + ";" + preco + ";" + categ;
            gravaArq2.write(linhaS2);
            gravaArq2.newLine();

        }
    }
        lerArq.close();
        gravaArq.close();
        gravaArq2.close();
        reader.close(); 

    }
}
