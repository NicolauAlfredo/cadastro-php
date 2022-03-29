<?php   
    include_once('config.php'); 
    include_once('editar.php');
    
    if(!empty($_GET['id'])) {

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuario WHERE id_usuario = $id";

        $result = $conexao->query($sqlSelect);    

        if($result->num_rows > 0) {
            while($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome_usuario'];
                $senha = $user_data['senha_usuario'];
                $email =  $user_data['email_usuario'];
                $telefone =  $user_data['telefone_usuario'];
                $sexo =  $user_data['sexo_usuario'];
                $data_nasc  =  $user_data['data_nascimento'];
                $cidade  =  $user_data['cidade_usuario'];
                $provincia  =  $user_data['provincia_usuario'];
                $endereco  =  $user_data['endereco_usuario'];
            }        
        } else {
            header('Location: sistema.php');
        }
    } else {
        header('Location: sistema.php');
    }
?>