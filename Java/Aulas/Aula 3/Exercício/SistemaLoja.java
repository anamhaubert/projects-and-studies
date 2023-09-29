import java.io.BufferedReader;
import java.io.InputStreamReader;

public class SistemaLoja {
    BufferedReader reader;
    public static void main(String[] args) throws Exception {
        SistemaLoja sl = new SistemaLoja();
        sl.reader = new BufferedReader(new InputStreamReader(System.in));
        sl.menu();
    }
    private void menu() throws Exception{

            String opcao = "";
            while(!opcao.equals("5")){
    
                System.out.println("Digite o dígito da ação que deseja realizar");
                System.out.println("1 - Cadastrar cliente");
                System.out.println("2 - Cadastrar gerente");
                System.out.println("3 - Cadastrar vendedor");
                System.out.println("4 - Cadastrar caixa");
                System.out.println("5 - Sair");

                opcao = this.reader.readLine();
    
                switch(opcao){
                    case "1":
                    this.cadastrarCliente();
                    break;
    
                    case "2":
                    this.cadastrarGerente();
                    break;
    
                    case "3":
                    this.cadastrarVend();
                    break;
    
                    case "4":
                    this.cadastrarCx();

                    default: break;
                }
            }
        }

        private Pessoa cadastroPessoa() throws Exception{
            Pessoa p = new Pessoa();

            System.out.println("Nome:");
            p.setNome(reader.readLine());;

            System.out.println("Email:");
            p.setEmail(reader.readLine());

            System.out.println("Telefone:");
            p.setTelefone(reader.readLine());

            System.out.println("Idade:");
            p.setIdade(Integer.parseInt(reader.readLine()));

            System.out.println("CPF:");
            p.setCPF(reader.readLine());

            return p;
        }

        private Funcionario cadastroFuncionario() throws Exception{
            Funcionario f = new Funcionario();

            System.out.println("Código:");
            f.setCod(reader.readLine());;

            System.out.println("Salario:");
            f.setSalario(Float.parseFloat(reader.readLine()));

            System.out.println("Banco de Horas:");
            f.setBancoHoras(Float.parseFloat(reader.readLine()));
    
            return f;
        }

        private void cadastrarCliente() throws Exception{
            Cliente c = new Cliente();
            
            Pessoa p1 = cadastroPessoa();

            System.out.println("Histórico de compras do Cliente:");
            c.setHistoricoCompras(reader.readLine());

            System.out.println("----------------");
            System.out.println("DADOS DO CLIENTE");
            System.out.println("Nome do Cliente:" + p1.getNome() +
                               " - Email do Cliente:" + p1.getEmail() +
                               " - Telefone do Cliente:" + p1.getTelefone() +
                               " - Idade do Cliente:" + p1.getIdade() +
                               " - CPF do Cliente:" + p1.getCPF() +
                               " - Historico de compras do Cliente:" + c.getHistoricoCompras()); 
            System.out.println("----------------");
            }

        private void cadastrarVend() throws Exception{
            Vendedor v = new Vendedor();
            System.out.println("CADASTRO DE VENDEDOR");

            Pessoa p3 = cadastroPessoa();
            Funcionario f2 = cadastroFuncionario();

            System.out.println("Meta do Vendedor:");
            v.setMeta(Float.parseFloat(reader.readLine()));

            System.out.println("Setor do Vendedor:");
            v.setSetor(reader.readLine());

            System.out.println("----------------");
            System.out.println("DADOS DO VENDEDOR");
            System.out.println("Nome do Vendedor:" + p3.getNome() +
                               " - Email do Vendedor:" + p3.getEmail() +
                               " - Telefone do Vendedor:" + p3.getTelefone() +
                               " - Idade do Vendedor:" + p3.getIdade() +
                               " - CPF do Vendedor:" + p3.getCPF() +
                               " - Código do Vendedor:" + f2.getCod() +
                               " - Salário do Vendedor:" + f2.getSalario() +
                               " - Banco de Horas do Vendedor:" + f2.getBancoHoras() +
                               " - Meta do Vendedor:" + v.getMeta() +
                               " - Setor do Vendedor:" + v.getSetor()); 
            System.out.println("----------------");
        }

        private void cadastrarGerente() throws Exception{
            Gerente g = new Gerente();
            System.out.println("CADASTRO DE GERENTE");

            Pessoa p2 = cadastroPessoa();
            Funcionario f1 = cadastroFuncionario();

            System.out.println("Filial que o gerente atua:");
            g.setFilial(reader.readLine());

            System.out.println("----------------");
            System.out.println("DADOS DO GERENTE");
            System.out.println("Nome do Gerente:" + p2.getNome() +
                               " - Email do Gerente:" + p2.getEmail() +
                               " - Telefone do Gerente:" + p2.getTelefone() +
                               " - Idade do Gerente:" + p2.getIdade() +
                               " - CPF do Gerente:" + p2.getCPF() +
                               " - Código do Gerente:" + f1.getCod() +
                               " - Salário do Gerente:" + f1.getSalario() +
                               " - Banco de Horas do Gerente:" + f1.getBancoHoras() +
                               " - Filial do Gerente:" + g.getFilial()); 
            System.out.println("----------------");
        }

        private void cadastrarCx() throws Exception{
            Caixa cx = new Caixa();
            System.out.println("CADASTRO DE CAIXA");

            Pessoa p4 = cadastroPessoa();
            Funcionario f3 = cadastroFuncionario();

            System.out.println("Usuário de acesso ao Caixa:");
            cx.setUsuario(reader.readLine());

            System.out.println("Senha de acesso ao Caixa:");
            cx.setSenha(reader.readLine());

            System.out.println("Número do caixa que o funcionário está operando:");
            cx.setNumCxOperado(Integer.parseInt(reader.readLine()));

            System.out.println("----------------");
            System.out.println("DADOS DO CAIXA");
            System.out.println("Nome do Caixa:" + p4.getNome() +
                               " - Email do Caixa:" + p4.getEmail() +
                               " - Telefone do Caixa:" + p4.getTelefone() +
                               " - Idade do Caixa:" + p4.getIdade() +
                               " - CPF do Caixa:" + p4.getCPF() +
                               " - Código do Caixa:" + f3.getCod() +
                               " - Salário do Caixa:" + f3.getSalario() +
                               " - Banco de Horas do Caixa:" + f3.getBancoHoras() +
                               " - Usuário:" + cx.getUsuario() +
                               " - Senha:" + cx.getSenha() +
                               " - Número do Caixa:" + cx.getNumCxOperado()); 
            System.out.println("----------------");
        }
    }