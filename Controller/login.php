<?php 
  // Chama conexao
  include_once ("../Model/dbConnection.php");

  // HTML vars
  $phoneMail = $_POST['phoneMail'];
  $password = $_POST['password'];

  // Introduzir ao banco de dados
  $sql = "SELECT phoneMail,pass,user FROM users WHERE phoneMail = '$phoneMail'";
  $query = mysqli_query($dbConnection, $sql);

  $dbArray = mysqli_fetch_array($query);

  // Faz o cookie e redireciona para o feed
  setcookie('user', $dbArray[2], time() + 3600 * 24);

  if ($phoneMail == $dbArray[0] && $password == $dbArray[1]) {
    header('Location: ../View/feed.php');
  } else {
    header('Location: ../View/login.html');
  }

  // Fim da conexao
  mysqli_close($dbConnection);