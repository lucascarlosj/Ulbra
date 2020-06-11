/*valores*/
function cv() {
    const qtd = document.getElementById("qtd")
    const value = document.getElementById("value")
    var result
    result = qtd.value * value.value
    if(result > 100) {
        result = result * 1.25
    } else if (result > 200) {
        result = result * 1.50
    }
    document.getElementById("result").innerHTML = `R$ ${result}`;
}
