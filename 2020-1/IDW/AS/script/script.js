function enviar(){
    var nomeValue = document.querySelector(".js-input-name").value;
    var nomeValue2 = document.querySelector(".js-input-name2").value;
    var valorValue = document.querySelector(".js-input-valor").value;
    var emailValue = document.querySelector(".js-input-email").value;
    var textValue = document.getElementById('textbox').value;

    Email.send({
        SecureToken : "8a6d02e7-1ed6-4494-8c82-8f0c0e64739d",
        To : emailValue,
        From : "muchpay.ulbra@gmail.com",
        Subject : "MuchPay - Você esta devendo para " + nomeValue,
        Body : textValue
    }).then(
      message => alert("Email enviado com sucesso!")
    );
}