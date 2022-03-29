<?php    
if(isset($_POST['submit'])) {
    include_once('formulario.php');
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email =  $_POST['email'];
    $telefone =  $_POST['telefone'];
    $sexo =  $_POST['genero'];
    $data_nasc  =  $_POST['data_nascimento'];
    $cidade  =  $_POST['cidade'];
    $provincia  =  $_POST['provincia'];
    $endereco  =  $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuario (nome_usuario, senha_usuario, email_usuario, telefone_usuario, sexo_usuario, data_nascimento, cidade_usuario, provincia_usuario, endereco_usuario) values('$nome', '$senha', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$provincia', '$endereco')");
}   
   
    /*
    print_r('Nome: '. $_POST['nome']);
    print_r('<br>');
    print_r('Email: '. $_POST['email']);
    print_r('<br>');
    print_r('Telefone: '. $_POST['telefone']);
    print_r('<br>');
    print_r('Sexo: '. $_POST['genero']);
    print_r('<br>');
    print_r('Data de nascimento: '. $_POST['data_nascimento']);
    print_r('<br>');
    print_r('Cidade: '. $_POST['cidade']);
    print_r('<br>');
    print_r('Provincia: '. $_POST['provincia']);
    print_r('<br>');
    print_r('Endereço: '. $_POST['endereco']);
    */
?>