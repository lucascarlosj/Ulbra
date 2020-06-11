/*valores*/
function cv() {
    var numeros = document.getElementById("numeros")
    numeros = numeros.value.replace(/ /g, '')
    numeros = numeros.split(",")
    var maior = []
    var menor = []
    for (let i = 0; i < numeros.length; i++) {
        if(numeros[i] < 18) {
            menor.push(numeros[i])
        } else {
            maior.push(numeros[i])
        }
    }
    console.log(maior)
    console.log(menor)
    document.getElementById("maior").innerHTML = `Idades maior que 18: ${maior}`;
    document.getElementById("menor").innerHTML = `Idades menor que 18: ${menor}`;
}
