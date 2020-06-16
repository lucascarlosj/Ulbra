function calcularIMC(){
    var formulario = document.getElementById("formulario");  
    var peso = +formulario.peso.value;
    var altura = +formulario.altura.value;
    var imc = parseFloat(peso) / parseFloat((altura * altura));
    
    if (imc < 18.5)
    formulario.imc.value = ("IMC: ") + imc.toFixed(2) + (" Você esta abaixo do peso ideal");
    else if (imc > 18.5 && imc < 25)
    formulario.imc.value = ("IMC: ") + imc.toFixed(2) + (" Você esta no peso ideal");
   else if (imc > 25 && imc < 30)
    formulario.imc.value = ("IMC: ") + imc.toFixed(2) + (" Você esta acima do peso ideal");
   else if (imc > 30)
    formulario.imc.value = ("IMC: ") + imc.toFixed(2) + (" Você esta obeso");
}