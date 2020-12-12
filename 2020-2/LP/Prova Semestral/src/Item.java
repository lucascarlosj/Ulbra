import java.util.Scanner;
public class Item {
    private String nome;
    private int quantidade;
    private double preco, total;

    public Item(){
        ler();
    }

    public void ler() {
        Scanner lc = new Scanner(System.in);
        System.out.println("Digite o nome do produto: ");
        this.nome = lc.nextLine();
        System.out.println("Digite a quantidade que deseja: ");
        this.quantidade = lc.nextInt();
        System.out.println("Digite o valor do produto: ");
        this.preco = lc.nextDouble();
    }

    @Override
    public String toString() {
        return "Item:" +
                nome + ", Quantidade:" + this.quantidade +
                ", Preço:" + this.preco +
                ", Total:" + this.quantidade * this.preco;
    }

    public String getNome() {
        return nome;
    }

    public double getTotal() {
        return (total = quantidade * preco);
    }
}
