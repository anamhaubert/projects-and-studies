import java.io.BufferedReader;
import java.io.InputStreamReader;

public class SistemaEscolar {

    private Escola e1;
    BufferedReader reader;
    public static void main(String[] args) throws Exception {
        SistemaEscolar se = new SistemaEscolar();
        se.e1= new Escola();
        se.reader = new BufferedReader(new InputStreamReader(System.in));

        System.out.println("Nome da escola:");
        se.e1.setNome(se.reader.readLine());
        System.out.println("Telefone:");
        se.e1.setFone(se.reader.readLine());
        se.menu();
    }

    //menu
    private void menu() throws Exception{

        String opcao = "";
        while(!opcao.equals("4")){

            System.out.println("--------------");
            System.out.println("1 - Cadastrar nova turma");
            System.out.println("2 - Listar turmas existentes");
            System.out.println("3 - Consultar uma turma");
            System.out.println("4 - Sair");
            opcao = this.reader.readLine();

            switch(opcao){
                case "1":
                this.cadastrarTurma();
                break;

                case "2":
                this.listarTurma();
                break;

                case "3":
                this.consultarTurma();
                break;

                default: break;
            }
        }
    }

    //cadastrar turma
    private void cadastrarTurma() throws Exception{

        Turma t = new Turma();
        System.out.println("CADASTRO DE TURMA");

            System.out.println("Numero da turma:");
            t.setNumeroTurma(Integer.parseInt(reader.readLine()));;
            System.out.println("Nome do curso");
            t.setNomeCurso(reader.readLine());
            System.out.println("Ano:");
            t.setAno(Integer.parseInt(reader.readLine()));

        System.out.println("------Alunos------");
            for (int i = 0;i<40;i++){
                System.out.println("Nome");
                String nome = reader.readLine();
                if(nome.equals("")) break;

                Aluno aluno = new Aluno();
                aluno.setNome(nome);
                    System.out.println("Matricula:");
                    aluno.setMatricula(reader.readLine());
                    System.out.println("Nota 1:");
                    aluno.setNota1(Float.parseFloat(reader.readLine()));
                    System.out.println("Nota 2:");
                    aluno.setNota2(Float.parseFloat(reader.readLine()));
                    System.out.println("Nota 3:");
                    aluno.setNota3(Float.parseFloat(reader.readLine()));
                    System.out.println("Nota 4:");
                    aluno.setNota4(Float.parseFloat(reader.readLine()));
                    t.setAluno(aluno);
        }
        this.e1.setTurma(t);
    }

    //listar turmas
    private void listarTurma(){

        System.out.println("-------------");
        System.out.println("Relatorio de turmas");

        for (int i = 0; i<this.e1.getQtdeTurmas();i++){
            Turma t = this.e1.getTurma(i);
            System.out.println("Numero:" + t.getNumeroTurma() +
                               " - Curso:" + t.getNomeCurso() +
                               " - Ano:" + t.getAno());}

    }

    //consultar turma
    private void consultarTurma() throws Exception{

        System.out.println("-------------");
        System.out.println("Consulta de turma");
        System.out.println("Numero de turma");

        int numTurma = Integer.parseInt(reader.readLine());
        boolean achou = false;

        for (int i = 0; i < this.e1.getQtdeTurmas(); i++) {
            Turma t = this.e1.getTurma(i);

                if(t.getNumeroTurma() == numTurma){
                    System.out.println("[Alunos da turma]");
                    int posAluno = 0;

                    while(t.getAluno(posAluno) != null){ 
                        String linha = "Nome:" + t.getAluno(posAluno).getNome();
                        linha += " - Matricula:" + t.getAluno(posAluno).getMatricula();
                        linha += " - Media:" + t.getAluno(posAluno).calcularMedia();

                        System.out.println(linha);
                        posAluno++;
                    }
                        achou = true;
                        break;
            }
        }
        if(!achou)
            System.out.println("turma nao encontrada");
    }
}