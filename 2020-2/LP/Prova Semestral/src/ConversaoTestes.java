public class ConversaoTestes {
    public static void main(String[] args) {
        Conversao cv = new Conversao();
        cv.reaisToDolar(100,5.16);
        cv.reaisToBitcoin(50.000, 97.975);
        cv.dolarToReais(150.0, 5.16);
        cv.dolarToBitcoin(5.000, 5.16, 97.975);
        cv.mostrarValores();
    }
}
