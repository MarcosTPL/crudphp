<?php

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);


        $result = $conexao->query("SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");

        print_r($result);
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }

?>