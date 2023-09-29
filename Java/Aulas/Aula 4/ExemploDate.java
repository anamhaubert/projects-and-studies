import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

public class ExemploDate{
    public static void main(String[] args) {
        Date agora = new Date();

            System.out.println("agora: " + agora);

            SimpleDateFormat sdf = new SimpleDateFormat("dd/MM/yyyy");
            String dataFormatada = sdf.format(agora);
            System.out.println("data formatada: " + dataFormatada);

        Date data = new Date();

            DateFormat dfs = DateFormat.getDateInstance(DateFormat.SHORT);
            String datafs = dfs.format(data);
            System.out.println("SHORT: " + datafs);

            DateFormat dfm = DateFormat.getDateInstance(DateFormat.MEDIUM);
            String datafm = dfm.format(data);
            System.out.println("MEDIUM: " + datafm);

            DateFormat dfl = DateFormat.getDateInstance(DateFormat.LONG);
            String datafl = dfl.format(data);
            System.out.println("LONG: " + datafl);
    }
}