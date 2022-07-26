<?php
    include_once ('../../config.php');
    $data = json_decode(file_get_contents("php://input"), true);

    if(!empty($data['id']))
    {
        

        $id = $data['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {      
            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
            echo "sucesso";
        }
        else
        {
            echo "erro ao deletar";
        }
    } 
    else
        {
            echo "erro id";
        }

?>