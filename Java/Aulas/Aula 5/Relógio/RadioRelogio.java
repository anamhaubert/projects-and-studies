public class RadioRelogio implements Radio, Relogio {
    
    public String getHoras(){
        return "tarde da noite";
    }

    public void ligar(){
        System.out.println("radio ligado");
    }

    public void desligar(){
        System.out.println("radio desligado");
    }

    public void trocarEstacao(float estacao){
        System.out.println("mudando frequencia para " + estacao);
    }
}
