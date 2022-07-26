function processForm(e) {
  // está parando o comportamento padrão do formulário
  if (e.preventDefault) e.preventDefault();

  // capturando o formulario com id login da pagina login
  var myForm = document.getElementById('login');

  // captura dos dados do formulario capturado acima
  formData = new FormData(myForm);

  // criando um objeto para receber os dados do formulario com a variavel json
  var object = {};
  formData.forEach(function (value, key) {
    object[key] = value;
  });
  // está transforando o json em um json string para enviar para o servidor
  var json = JSON.stringify(object);

  fetch('api/valida-login.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: json
  }).then(function (response) {
    return response.text();
  }).then(function (data) {
    if (data == "sucesso") {
      window.location = "sistema.php";
    } else {
      alert(data);
    }
  }
  ).catch(function (err) {
    alert("Erro ao cadastrar usuário!");
  });
  // // You must return false to prevent the default form behavior
  // return false;
}

// capturando o formulario com id login da pagina login
var form = document.getElementById('login');
if (form.attachEvent) {
  // falando que quando o evento submit for disparado, chame a funcao processForm
  form.attachEvent("submit", processForm);
} else {
  // escutando que quando o evento submit for disparado, chame a funcao processForm
  form.addEventListener("submit", processForm);
}

function voltarIndex() {
  window.location = 'index.php';
}

