<?php

    if(!empty($_GET['id']))
    {
    

        include_once ('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {      
            print_r(("Ola mundo"));
            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
            header('Location: sistema.php');
        }
            header('Location: sistema.php');
        

    } 

?>