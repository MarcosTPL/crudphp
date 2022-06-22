<?php

// print_r('Nome: ' . $data['nome']);
// print_r('<br>');
// print_r('Email: ' . $data['email']);
// print_r('<br>');
// print_r('Senha: ' . $data['senha']);
// print_r('<br>');
// print_r('Telefone: ' . $data['telefone']);
// print_r('<br>');
// print_r('Sexo: ' . $data['genero']);
// print_r('<br>');
// print_r('Data de nascimento: ' . $data['data_nascimento']);
// print_r('<br>');
// print_r('Cidade: ' . $data['cidade']);
// print_r('<br>');
// print_r('Estado: ' . $data['estado']);
// print_r('<br>');
// print_r('Endereço: ' . $data['endereco']);
// print_r('<br>');

include_once __DIR__ . '/../config.php';

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


$result = $conexao->query("INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

if ($result) {
  echo "true";
} else {
  echo "false";
}
