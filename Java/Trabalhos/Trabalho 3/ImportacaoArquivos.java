import java.io.FileNotFoundException;
import java.io.IOException;

public interface ImportacaoArquivos {

    void carregarConfiguracoes(String arqConfig) throws FileNotFoundException, IOException;
    void importarDados(String arqDadosEntrada) throws FileNotFoundException, IOException;

}