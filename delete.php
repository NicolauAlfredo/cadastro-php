<?php   
    include_once('config.php');  
    
    if(!empty($_GET['id'])) {

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuario WHERE id_usuario = $id";

        $result = $conexao->query($sqlSelect);    

        if($result->num_rows > 0) {
            $sqlDetele = "DELETE FROM usuario WHERE id=$id";
            $resultDelete = $conexao->query($sqlDetele);       
        } else {
            header('Location: sistema.php');
        }
}   
?>