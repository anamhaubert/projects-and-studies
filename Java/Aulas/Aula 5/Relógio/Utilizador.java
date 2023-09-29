public class Utilizador {
    public static void main(String[] args) {

        System.out.println("relogio de pulso");

        RelogioDePulso rp = new RelogioDePulso();

        System.out.println(rp.getHoras());
        System.out.println(rp.iniciarCronometro());

        //por padrao, nao se pode instanciar uma interface,  
        //a menos que se faça na hora uma implementação dos métodos
        //uso mais restrito
        Relogio r = new Relogio() {
            public String getHoras(){
                return "outro horario...";
            }
        };

        RadioRelogio rr = new RadioRelogio();

        rr.ligar();
        System.out.println(rr.getHoras());
        rr.trocarEstacao(99.3f);
        rr.desligar();
    }
}
