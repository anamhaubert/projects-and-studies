public class ContaCorrentePersonalizada extends ContaCorrenteBase{
    private float tax;
    
    public float getTax() {
        return tax;
    }

    public void setTax(float tax) {
        this.tax = tax;
    }

    public void sacarQuantia(float q){
        float novo = q + (q*tax);
        super.sacarQuantia(novo);
    }
}
