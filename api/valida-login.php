<?php
session_start();

// receive post data json
$data = json_decode(file_get_contents("php://input"), true);

//print_r($_REQUEST);
if (!empty($data['email']) && !empty($data['senha'])) {
  // Acessa
  include_once('../../config.php');
  $email = $data['email'];
  $senha = $data['senha'];

  $result = $conexao->query("SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");

  // print_r($result);

  if (mysqli_num_rows($result) < 1) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    echo "usuario e senha invalido";
  } else {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    echo "sucesso";
  }
} else {
  echo "não temos email nem senha";
}
