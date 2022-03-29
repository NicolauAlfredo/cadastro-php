<?php
    $db_host = 'Localhost';
    $db_username = 'root';
    $db_password = 'nicolau14-06-1999';
    $db_name = 'sist_cad_php';

    $conexao = new mysqli($db_host, $db_username, $db_password, $db_name);

    // if ($conexao -> connect_errno) {
    //     echo "Erro: ";
    // } else {
    //     echo 'Conexão realizada com sucesso';
    // }
?>