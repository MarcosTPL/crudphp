include_once('register.php');
function abreLinkLogin(){
    window.location="login.html";
}
function abreLinkRegister(){
    window.location="register.php";
}

fetch('http://example.com/movies.json')
  .then((response) => {
    return response.json();
  })
  .then((myJson) => {
    console.log(myJson);
  });