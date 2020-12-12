import java.util.ArrayList;
import java.util.Scanner;

public class ItemTeste {
    public static void main(String[] args) {
        ArrayList<Item> lc = new ArrayList<>();
        Scanner in = new Scanner(System.in);
        Item c1;
        String num1;
        int opcao=0;
        do{
            System.out.println("---------------------------");
            System.out.println("|     MENU DE COMPRAS     |");
            System.out.println("---------------------------");
            System.out.println("1 - Adicionar");
            System.out.println("2 - Remover");
            System.out.println("3 - Listar Itens");
            System.out.println("4 - Ver total da Lista");
            System.out.println("5 - Encerrar o Pragrama");
            System.out.print("Opção: ");
            opcao = in.nextInt();
            in.nextLine();

            switch (opcao){
                case 1:
                    c1 = new Item();
                    lc.add(c1);
                    break;

                case 2:
                    System.out.println("Digite o nome do produto para remover: ");
                    num1 = in.nextLine();
                    for(int i = 0; i < lc.size(); i++) {
                        c1 = lc.get(i);
                        if (c1.getNome().equals(num1)) {
                            lc.remove(c1);
                        }
                    }
                    break;

                case 3:
                    System.out.println("---------------------");
                    System.out.println("SUA LISTA DE PRODUTOS");
                    System.out.println("---------------------");
                    for (int i=0;i< lc.size();i++){
                        System.out.println(lc.get(i).toString());
                    }
                    break;

                case 4:
                    System.out.println("--------------");
                    System.out.println("TOTAL DA LISTA");
                    System.out.println("--------------");
                    Double total = 0.00;
                    for (Item l : lc){
                        total+= l.getTotal();
                    }
                    System.out.println("---------------------");
                    System.out.printf("O valor total dos seus produtos é: %.2f %n ",total);
                    System.out.println("---------------------");
                    break;

                case 5:
                    System.out.println("---------------------");
                    System.out.println("Você saiu do sistema");
                    System.out.println("---------------------");
                    return;
                default:
                    System.out.println("---------------");
                    System.out.println("Opção Invalida!");
                    System.out.println("---------------");
                    break;
            }
        }while(opcao !=0);
    }
}
