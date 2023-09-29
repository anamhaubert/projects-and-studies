public class Funcionario extends Pessoa {
    private String cod;
    // private String cargo;
    private float salario;
    private float bancoHoras;
    
    public String getCod() {
        return cod;
    }
    public void setCod(String cod) {
        this.cod = cod;
    }
    // public String getCargo() {
    //     return cargo;
    // }
    // public void setCargo(String cargo) {
    //     this.cargo = cargo;
    // }
    public float getSalario() {
        return salario;
    }
    public void setSalario(float salario) {
        this.salario = salario;
    }
    public float getBancoHoras() {
        return bancoHoras;
    }
    public void setBancoHoras(float bancoHoras) {
        this.bancoHoras = bancoHoras;
    }
}
