public class Conversao {
    public double dolar;
    public double reais;
    public double bitcoin;
    public double dolarBitcoin;
    public double bitcoinReal;

    public double reaisToDolar(double valorEmReais, double valorEmDolar){
        return (dolar = valorEmReais / valorEmDolar);
    }

    public double reaisToBitcoin(double valorEmReais, double valorEmBitcoin){
        return (bitcoin = valorEmReais / valorEmBitcoin);
    }

    public double dolarToReais(double quantidadeEmDolares, double valorDoDolar){
        return (reais = quantidadeEmDolares * valorDoDolar);
    }

    public double dolarToBitcoin(double quantidadeEmDolares, double valorDoDolar, double valorEmBitcoin){
        dolarBitcoin = (quantidadeEmDolares * valorDoDolar) / valorEmBitcoin;
        return (bitcoinReal = quantidadeEmDolares * valorDoDolar);
    }

    public void mostrarValores(){
        System.out.printf("Valor convertido em DOLAR: " + "%.2f %n", dolar);
        System.out.printf("Valor convertido em BITCOIN: " + "%.2f %n", bitcoin);
        System.out.printf("Valor convertido em REAIS: " + "%.2f %n", reais);
        System.out.printf("Valor convertido de DOLARES em BITCOIN: " + "%.2f", dolarBitcoin);
        System.out.printf(" e convertido em REAL é: " + "%.3f", bitcoinReal);
    }


}
