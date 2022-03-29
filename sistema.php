<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
    $result = $conexao->query($sql); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>SISTEMA | NA</title>
  <style>
    body {
      text-align: center;
      color: white;
      background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    }

    .table-bg {
      background: rgba(0, 0, 0, 0.3);
      border-radius: 15px 15px 0 0;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SISTEMA DO NA </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
    </div>
  </nav>
  <br>
  <?php
  echo "<h1> Bem-vindo <u>$logado</u></<h1>";
?>

  <div class="me-5">
    <table class="table text-white table-bg">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
          <th scope="col">Sexo</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col">Opções</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($user_data = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>".$user_data['id_usuario']."</td>";
          echo "<td>".$user_data['nome_usuario']."</td>";
          echo "<td>".$user_data['email_usuario']."</td>";
          echo "<td>".$user_data['telefone_usuario']."</td>";
          echo "<td>".$user_data['sexo_usuario']."</td>";
          echo "<td>".$user_data['data_nascimento']."</td>";
        }
     ?>
      </tbody>
    </table>
  </div>
</body>

</html>