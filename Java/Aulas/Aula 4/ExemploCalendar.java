import java.text.DateFormat;
import java.util.Calendar;
import java.util.GregorianCalendar;

public class ExemploCalendar {
    public static void main(String[] args) {
        Calendar agora = Calendar.getInstance();
        // System.out.println("agora: " + agora);
        Calendar vencimento = agora;
            vencimento.add(Calendar.DATE, 7);
            // System.out.println("vencimento: " + vencimento);
            vencimento.add(Calendar.MONTH, 1);
            // System.out.println("novo vencimento: " + vencimento);
        
        GregorianCalendar gc = new GregorianCalendar();
            System.out.println("ano: " + gc.get(Calendar.YEAR));
            System.out.println("mes: " + gc.get(Calendar.MONTH));
            System.out.println("dia do mes: " + gc.get(Calendar.DAY_OF_MONTH));
            System.out.println("dia da semana: " + gc.get(Calendar.DAY_OF_WEEK));

        DateFormat df = DateFormat.getDateInstance(DateFormat.MEDIUM);
            System.out.println("hoje: " + df.format(gc.getTime()));
            System.out.println("vencimento: " + df.format(vencimento.getTime()));

        //criando uma data especifica
            System.out.println("criando uma data especifica");
        GregorianCalendar data = new GregorianCalendar();
        data.set(2023, Calendar.MAY, 1);
            System.out.println(df.format(data.getTime()));
        
            System.out.println("criando uma data a partir de um String");
        String dtNasc = "21/11/2003";
        String[] vetDtNasc=dtNasc.split("/");
        data.set(Calendar.YEAR, Integer.parseInt(vetDtNasc[2]));
        data.set(Calendar.MONTH, Integer.parseInt(vetDtNasc[1])-1);
        data.set(Calendar.DAY_OF_MONTH, Integer.parseInt(vetDtNasc[0]));
            System.out.println("data: " + df.format(data.getTime()));
    }
}
