public class ContaCorrenteVIP extends ContaCorrenteBase {

    public void sacarQuantia(float q){
        float taxa = 0.03f;
        float novo = q + (q*taxa);
        super.sacarQuantia(novo);
    }

}
