import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;

public class ExemploLocalDateTime {
    public static void main(String[] args) {
        LocalDate data = LocalDate.now();
        System.out.println(data);

        LocalTime hora = LocalTime.now();
        System.out.println(hora);

        LocalDateTime dataHora = LocalDateTime.now();
        System.out.println(dataHora);

        //formatar
        DateTimeFormatter format = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm");
        DateTimeFormatter formato = DateTimeFormatter.ofPattern("dd/MM/yyyy");
        DateTimeFormatter formato2 = DateTimeFormatter.ofPattern("HH:mm");
        System.out.println(dataHora.format(format));

        //calcular datas
        LocalDate hoje = LocalDate.now();
        LocalDate amanha = hoje.plusDays(1);
            System.out.println("hoje: " + hoje.format(formato));
            System.out.println("amanha: " + amanha.format(formato));
        
        LocalTime horaAtual = LocalTime.now();
        LocalTime menosUmaHora = horaAtual.minusHours(1);
            System.out.println("agora: " + horaAtual.format(formato2));
            System.out.println("agora menos 1 hora: " + menosUmaHora.format(formato2));
            
        LocalDateTime agora = LocalDateTime.now();
        LocalDateTime futuro = agora.plusDays(5).minusHours(3).plusMinutes(12);
            System.out.println("agora: " + agora.format(format));
            System.out.println("futuro: " + futuro.format(format));

        //criar uma data especifica
        DateTimeFormatter formatoDt = DateTimeFormatter.ofPattern("dd/MM/yyyy");
        LocalDate minhaData = LocalDate.parse("20/09/2020", formatoDt);
            System.out.println("minha data: " + minhaData);
            System.out.println("minha data formatada: " + minhaData.format(formatoDt));

    }
}
