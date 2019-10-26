<?php 
  // Inicia session
  session_start();

  // Chama conexao e variaveis do html
  include_once('dbConnection.php');
  include_once('htmlVars.php');

  // Seleciona a senha do db
  $sql = "SELECT pass FROM users WHERE user = '$_SESSION[user]'";
  $query = mysqli_query($dbConnection, $sql);

  // Resultado da busca
  $dbArray = mysqli_fetch_array($query);
  $dbPass = $dbArray[0];
  
  // Se a senha for a msm do banco, continua
  if ($password == $dbPass) {

      // Se a senha nova for == a confirmacao da senha nova
      if ($afterPass == $confirmPass) {

        // Atualiza a senha
        $sql = "UPDATE users SET pass = '$afterPass' WHERE user = '$_SESSION[user]'";
        $query = mysqli_query($dbConnection, $sql);

        // Redireciona
        header('Location: ../View/feed.php');
      
    // Se senhas novas forem diferentes
    } else {
      header('Location: ../View/settings.html');
    }

  // Se a senha for diferente do banco  
  } else {
    header('Location: ../View/settings.html');
  }