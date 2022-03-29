<?php
    include_once('config.php');

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email =  $_POST['email'];
        $telefone =  $_POST['telefone'];
        $sexo =  $_POST['genero'];
        $data_nasc  =  $_POST['data_nascimento'];
        $cidade  =  $_POST['cidade'];
        $provincia  =  $_POST['provincia'];
        $endereco  =  $_POST['endereco'];

        $sqlUpdate = "UPDATE usuario SET nome_usuario = '$nome', senha_usuario = '$senha',  email_usuario = '$email', telefone_usuario = '$telefone', sexo_usuario = '$sexo', data_nascimento = '$data_nasc', cidade_usuario = '$cidade', provincia_usuario = '$provincia', endereco_usuario = '$endereco' WHERE id = '$id'";
        
        $result = $conexao->query($sqlUpdate);
    } 
    header('Location: sistema.php');
?>