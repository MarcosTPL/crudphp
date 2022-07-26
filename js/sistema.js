
function deleteUser(id){
    var r = confirm('Deseja realmente excluir usuario?');
    if(r == true){
        var json = JSON.stringify({
            id: id
        });
      
        fetch('crudphp/api/delete.php', {
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
          alert("Erro ao deletar usuário!");
        });
    }
    
}