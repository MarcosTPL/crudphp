function processForm() {

  // capturando o formulario com id login da pagina login
  var myForm = document.getElementById('edit');

  // captura dos dados do formulario capturado acima
  formData = new FormData(myForm);

  // criando um objeto para receber os dados do formulario com a variavel json
  var object = {};
  formData.forEach(function (value, key) {
    object[key] = value;
  });
  // está transforando o json em um json string para enviar para o servidor
  var json = JSON.stringify(object);

  fetch('api/editar-usuario.php', {
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
    alert("Erro ao editar usuário!");
  });
  // // You must return false to prevent the default form behavior
  // return false;
}

function abrirModal(id) {
  fetch(`edit.php?id=${id}`).then(function(html){
    return html.text();
  }).then(function(html){
    console.log(html)
    document.querySelector("#edit-modal-content").innerHTML = html;
  })
}