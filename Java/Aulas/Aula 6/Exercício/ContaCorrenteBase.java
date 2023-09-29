public class ContaCorrenteBase {
    private String numConta;
    private String nome;
    private float saldo;

    public String getNumConta() {
        return numConta;
    }
    public void setNumConta(String numConta) {
        this.numConta = numConta;
    }

    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }

    public void depositarQuantia(float q){
        saldo+=q;
    }
    public void sacarQuantia(float q){
        if(q<=saldo)
        saldo-=(q+(q*0.05f));
        else System.out.println("impossivel sacar, saldo insuficiente");
    }
    
    public float getSaldo() {
        return saldo;
    }
    public void setSaldo(float saldo) {
        this.saldo = saldo;
    }
}