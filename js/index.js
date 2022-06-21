function abreLinkLogin() {
  window.location = "login.html";
}

function abreLinkRegister() {
  window.location = "register.php";
}

function processForm(e) {
  if (e.preventDefault) e.preventDefault();

  /* do what you want with the form */
  var myForm = document.getElementById('registro');
  formData = new FormData(myForm);
  var object = {};
  formData.forEach(function (value, key) {
    object[key] = value;
  });
  var json = JSON.stringify(object);

  fetch('api/inserir-usuario.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: json
  }).then(function (response) {
    return response.text();
  }).then(function (data) {
    console.log(data);
    if (data == "true") {
      alert("Usuário cadastrado com sucesso!");
    } else {
      alert("Erro ao cadastrar usuário!");
    }
  }
  ).catch(function (err) {
    alert("Erro ao cadastrar usuário!");
  });
  // You must return false to prevent the default form behavior
  return false;
}

var form = document.getElementById('registro');
if (form.attachEvent) {
  form.attachEvent("submit", processForm);
} else {
  form.addEventListener("submit", processForm);
}