<?php 
  // Chama conexao
  include_once('../Model/dbConnection.php');
  include_once('../Model/htmlVars.php');

  // Pesquisar no banco de dados
  $sql = "SELECT phoneMail,pass,user FROM users WHERE phoneMail = '$phoneMail'";
  $query = mysqli_query($dbConnection, $sql);

  // Resultado da pesquisa
  $dbArray = mysqli_fetch_array($query);

  // Validacao de login
  if ($phoneMail == $dbArray[0]  && $password == $dbArray[1]) {
    include_once("../Model/session.php");
    header('Location: ../View/feed.php');
  } else {
    header('Location: ../View/login.html');
  }

  // Fim da conexao
  mysqli_close($dbConnection);