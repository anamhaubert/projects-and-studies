import java.io.BufferedReader;
import java.io.InputStreamReader;

public class Banco {
    BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
    ContaCorrenteNormal ccn = new ContaCorrenteNormal();
    ContaCorrenteVIP ccv = new ContaCorrenteVIP();
    ContaCorrentePersonalizada ccp = new ContaCorrentePersonalizada();
    public static void main(String[] args) throws Exception{
        
        Banco b = new Banco();
        b.menu();
    }

        private void menu() throws Exception{
        String opcao = "";
        while(!opcao.equals("4")){

        System.out.println("Qual é o seu tipo de Conta?");
        System.out.println("1-Conta Corrente Normal");
        System.out.println("2-Conta Corrente VIP");
        System.out.println("3-Conta Corrente Personalizada");
        System.out.println("4-Sair");

        opcao =this.reader.readLine();

        switch(opcao){
            case "1":
            this.goConta(ccn);
            break;

            case "2":
            this.goConta(ccv);
            break;

            case "3":
                System.out.println("Digite sua taxa personalizada de saque (ex: 2% -> 0.02)");
                ccp.setTax(Float.parseFloat(reader.readLine()));
                this.goConta(ccp);
            break;

            default: break;

    }}}
        private void goConta(ContaCorrenteBase conta) throws Exception{
            System.out.println("Digite seu nome");
            conta.setNome(reader.readLine());
            System.out.println("Digite o número da sua conta");
            conta.setNumConta(reader.readLine());

            String opcao = "";
            while(!opcao.equals("4")){

            System.out.println("O que deseja fazer?");
            System.out.println("1-Depositar");
            System.out.println("2-Sacar");
            System.out.println("3-Consultar saldo");
            System.out.println("4-Sair");

            opcao = reader.readLine();

            if(opcao.equals("1")){
                float quantia = 0f;
                System.out.println("qual a quantia que voce quer depositar?");
                quantia = Float.parseFloat(reader.readLine());
                conta.depositarQuantia(quantia);
        }
            else if(opcao.equals("2")){
                float quantia = 0f;
                System.out.println("qual a quantia que voce quer sacar?");
                quantia = Float.parseFloat(reader.readLine());
                conta.sacarQuantia(quantia);
        }
             else if(opcao.equals("3")){
                float s = conta.getSaldo();
                System.out.println("seu saldo é: R$"+String.format("%.2f",s));
        }
            else break;
}}}

       