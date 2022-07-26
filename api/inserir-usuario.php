<?php

include_once __DIR__ . '/../../config.php';

// receive post data json
$data = json_decode(file_get_contents("php://input"), true);


$nome = $data['nome'];
$email = $data['email'];
$senha = $data['senha'];
$telefone = $data['telefone'];
$sexo = $data['genero'];
$data_nasc = $data['data_nascimento'];
$cidade = $data['cidade'];
$estado = $data['estado'];
$endereco = $data['endereco'];


$result = $conexao->query("INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco) 
VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

if ($result) {
  echo "true";
} else {
  echo "false";
}
