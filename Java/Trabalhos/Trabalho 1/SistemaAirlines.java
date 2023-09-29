import java.io.BufferedReader;
import java.io.InputStreamReader;

public class SistemaAirlines {

    private Companhia c1;
    BufferedReader reader;
    public static void main(String[] args) throws Exception {
        SistemaAirlines sa = new SistemaAirlines();
        sa.c1= new Companhia();
        sa.reader = new BufferedReader(new InputStreamReader(System.in));

        System.out.println("Nome da companhia aérea:");
        sa.c1.setNome(sa.reader.readLine());
        System.out.println("Telefone do SAC:");
        sa.c1.setFone(sa.reader.readLine());
        sa.menu();
    }

    //menu
    private void menu() throws Exception{

        String opcao = "";
        while(!opcao.equals("4")){

            System.out.println("--------------");
            System.out.println("1 - Cadastrar novo voo");
            System.out.println("2 - Listar voos existentes");
            System.out.println("3 - Consultar um voo");
            System.out.println("4 - Sair");
            opcao = this.reader.readLine();

            switch(opcao){
                case "1":
                this.cadastrarVoo();
                break;

                case "2":
                this.listarVoo();
                break;

                case "3":
                this.consultarVoo();
                break;

                default: break;
            }
        }
    }

    private void cadastrarVoo() throws Exception{

        Voo v = new Voo();
        System.out.println("CADASTRO DE VOO");

            System.out.println("Numero do voo:");
            v.setNumeroVoo(Integer.parseInt(reader.readLine()));;

            System.out.println("Cidade de partida:");
            v.setPartida(reader.readLine());

            System.out.println("Cidade do destino:");
            v.setDestino(reader.readLine());

            System.out.println("Horário do voo (hh:mm):");
            v.setHora(reader.readLine());

            System.out.println("Data do voo (dd.mm.aaaa):");
            v.setData(reader.readLine());

        System.out.println("------Passageiros------");
            for (int i = 0;i<300;i++){
                System.out.println("Nome:");
                String nome = reader.readLine();
                if(nome.equals("")) break;

                Passageiro p = new Passageiro();
                p.setNome(nome);

                    System.out.println("Número da passagem:");
                    p.setNumPassagem(Integer.parseInt(reader.readLine()));;
                    System.out.println("CPF (apenas numeros):");
                    p.setCPF(reader.readLine());;
                    v.setPassageiro(p);
        }
        this.c1.setVoos(v);
    }

    private void listarVoo(){

        System.out.println("-------------");
        System.out.println("Relatorio de voos");

        for (int i = 0; i<this.c1.getQtdeVoos();i++){
            Voo v = this.c1.getVoos(i);
            System.out.println("Numero do voo:" + v.getNumeroVoo() +
                               " - Cidade de partida:" + v.getPartida() +
                               " - Cidade do destino:" + v.getDestino() +
                               " - Horário do voo:" + v.getHora() +
                               " - Data do voo:" + v.getData()); }
    }

    private void consultarVoo() throws Exception{

        System.out.println("-------------");
        System.out.println("Consulta de voo");
        System.out.println("Numero do voo:");

        int numVoo = Integer.parseInt(reader.readLine());
        boolean achou = false;

        for (int i = 0; i < this.c1.getQtdeVoos(); i++) {
            Voo v = this.c1.getVoos(i);

                if(v.getNumeroVoo() == numVoo){
                    System.out.println("[dados do voo]");
                    int posp = 0;

                    while(v.getPassageiro(posp) != null){ 
                        String linha = "Nome:" + v.getPassageiro(posp).getNome();
                        linha += " - Número da passagem:" + v.getPassageiro(posp).getNumPassagem();
                        linha += " - CPF:" + v.getPassageiro(posp).getCPF();

                        System.out.println(linha);
                        posp++;
                    }
                     System.out.println("Assentos restantes no voo: " + (300-posp));
                        achou = true;
                        break;
            }
        }
        if(!achou)
            System.out.println("voo nao encontrado");
    }
}