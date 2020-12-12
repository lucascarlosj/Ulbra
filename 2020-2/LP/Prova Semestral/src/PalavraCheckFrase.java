import java.util.Scanner;

public class PalavraCheckFrase {
    public static void main(String[] args) {
        Scanner pl = new Scanner(System.in);
        System.out.println("Digite uma frase: ");
        String frase = pl.nextLine();
        System.out.println("Digite um palavra: ");
        String palavra = pl.nextLine();
        if (palavra.length() > 5) {
            System.out.println("---------------------------------------");
            System.out.println("WARNING! PALAVRA MAIOR QUE 5 CARACTERES");
            System.out.println("---------------------------------------");
        } else {
            if (frase.contains(palavra)) {
                System.out.println("Já existe na frase a palavra: " + palavra);
            } else {
                System.out.println("Ainda NÃO existe na frase a palavra: " + palavra);
            }
        }
    }
}
