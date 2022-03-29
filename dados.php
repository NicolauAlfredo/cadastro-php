<?php
    if(isset($_POST['submit'])) {
        include_once('config.php');
        include_once('formulario.php');
        
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email =  $_POST['email'];
        $telefone =  $_POST['telefone'];
        $sexo =  $_POST['genero'];
        $data_nasc  =  $_POST['data_nascimento'];
        $cidade  =  $_POST['cidade'];
        $provincia  =  $_POST['provincia'];
        $endereco  =  $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuario (nome_usuario, senha_usuario, email_usuario, telefone_usuario, sexo_usuario, data_nascimento, cidade_usuario, provincia_usuario, endereco_usuario) 
        values('$nome', '$senha', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$provincia', '$endereco')");
        header('Location: login.php');
    }   
?>