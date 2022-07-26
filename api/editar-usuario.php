<?php

    include_once('../../config.php');

    $data = json_decode(file_get_contents("php://input"), true);



    if(!empty($data['id']))
    {   
        $id = $data['id'];
        $nome = $data['nome'];
        $email = $data['email'];
        $senha = $data['senha'];
        $telefone = $data['telefone'];
        $sexo = $data['genero'];
        $data_nasc = $data['data_nascimento'];
        $cidade = $data['cidade'];
        $estado = $data['estado'];
        $endereco = $data['endereco'];

        $sqlUpdate = "UPDATE usuarios SET nome = '$nome',email = '$email',senha = '$senha',telefone = '$telefone',sexo = '$sexo',data_nasc = '$data_nasc',cidade = '$cidade',estado = '$estado',endereco = '$endereco'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
        echo "sucesso";
    }
    else 
    {
        echo "erro ao editarrr";
    }
    
?>