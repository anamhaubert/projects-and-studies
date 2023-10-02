import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class TransportadoraNalu implements ImportacaoArquivos {
    
        BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));

        EncomendaNormal[] entregasNormais = new EncomendaNormal[1000];
        EncomendaExpress[] entregasExpress = new EncomendaExpress[1000];

        int contN=0;
        int contE=0;
        
        Frete f = new Frete();
        
        EncomendaNormal en;
        EncomendaExpress ee;
    public static void main(String[] args) throws IOException {
     
       TransportadoraNalu tn = new TransportadoraNalu();

        String arqC = "";

        System.out.println("Digite o nome do arquivo de configuraçao:");
        arqC = tn.reader.readLine();

        if(arqC.isEmpty()){
            arqC="arqConfig"; }

        String type = ".csv";
        arqC = arqC.concat( type );
       
        tn.carregarConfiguracoes(arqC);

        tn.menu();
    }

    public void carregarConfiguracoes(String arqConfig) throws IOException{
        
        BufferedReader lerArq = new BufferedReader(new FileReader(arqConfig));

        lerArq.readLine();
        String linha = "";

        while((linha = lerArq.readLine()) != null){
           String[] array =linha.split(";");

           if(array[1].equals("EN"))
           f.setValorN(Float.parseFloat(array[2]));
           else if (array[1].equals("EE"))
           f.setValorE(Float.parseFloat(array[2]));
        }

        lerArq.close();
    }

    public void importarDados(String arqDadosEntrada) throws IOException{

            if(arqDadosEntrada.isEmpty())
                arqDadosEntrada="encomendas_foz"; 

            String type = ".csv";
            arqDadosEntrada = arqDadosEntrada.concat( type );

            BufferedReader lerArq = new BufferedReader(new FileReader(arqDadosEntrada));

        lerArq.readLine();
        String linha = "";

        while((linha = lerArq.readLine()) != null){
       
            String[] array2 = linha.split(";");


            if("EN".equals(array2[2])){
            en = new EncomendaNormal();

            en.setDataPost(array2[1]);
            en.setPeso(Float.parseFloat(array2[4]));
            en.setNumPed(array2[0]);

            entregasNormais[contN]=en;
            contN++;

            }

            else if("EE".equals(array2[2])){
            ee = new EncomendaExpress();

            ee.setDataPost(array2[1]);
            ee.setPeso(Float.parseFloat(array2[4]));
            ee.setNumPed(array2[0]);
            ee.setPrazo(Integer.parseInt(array2[3]));
            ee.setFone(array2[5]);

            entregasExpress[contE]=ee;
            contE++;
            }

        } System.out.println("Arquivo importado");
        System.out.println("\n");

        lerArq.close();
    }

    private void menu() throws IOException{
        String opcao = "";
        while(!opcao.equals("4")){

        System.out.println("O que deseja realizar?");
        System.out.println("1-Importar arquivo de encomendas");
        System.out.println("2-Exibir a lista de encomendas Normais");
        System.out.println("3-Exibir a lista de encomendas Expressas");
        System.out.println("4-Sair");
        
        opcao =this.reader.readLine();

        switch(opcao){
            case "1":
                String arqEntrada ="";

                System.out.println("Digite o nome do arquivo de entrada:");
                arqEntrada = reader.readLine();

                this.importarDados(arqEntrada);
            break;

            case "2":
                this.exibir(0);
                break;

            case "3":
                this.exibir(1);
                break;

            default: break;
    }}}

    private void exibir(int i) {
        System.out.println("\n");
        String linha = "Nro pedido; Peso; Valor do Frete";
        System.out.println(linha);
    
        if(i==0){
        for(i=0;i<=contN;i++){
            if(entregasNormais[i]!=null){
           System.out.println(entregasNormais[i].getNumPed() + ";"
                    + entregasNormais[i].getPeso() + ";"
                    + String.format("%.2f", entregasNormais[i].calcularFrete(entregasNormais[i].getPeso(),f.getValorE())));
        }}

    }

    if(i==1){
       for(i=0;i<=contE;i++){
        if(entregasExpress[i]!=null){
            System.out.println(entregasExpress[i].getNumPed() + ";"
                    + entregasExpress[i].getPeso() + ";"
                    + String.format("%.2f", entregasExpress[i].calcularFrete(entregasExpress[i].getPrazo(),entregasExpress[i].getPeso(),f.getValorE())));
        
    }}}
    System.out.println("\n");
}}