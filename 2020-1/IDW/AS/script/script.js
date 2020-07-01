//checkForm, verifica se o formulario esta devidamente preenchido, caso não, ele solicita e se estiver tudo OK somente chama a função para enviar o email.
(function checkForm() {

  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function() {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          enviar()
          form.classList.add('was-validated');
        }
      }, false);
    });
  }, false);
})();

//Função pega os valores digitados e envia para o email de destino.
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
      alert("Email enviado com sucesso!")
    );
}