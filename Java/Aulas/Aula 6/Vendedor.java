public class Vendedor{

    //polimorfismo OVERLOAD
    
    //comissao de 5% mais r$20
    public float calcularComissao(float venda){
        float comissao = (venda* 0.05f)+20.0f;
        return comissao;
    }

    //% de comissao variavel
    public float calcularComissao(float venda, float perc){
        float comissao = venda* perc;
        return comissao;
    }

}