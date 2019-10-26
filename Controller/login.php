<?php 
  // Chama conexao
  include_once('../Model/dbConnection.php');
  include_once('../Model/htmlVars.php');

  // Pesquisar no banco de dados
  $sql = "SELECT phoneMail,pass,user FROM users WHERE phoneMail = '$phoneMail'";
  $query = mysqli_query($dbConnection, $sql);

  // Resultado da pesquisa
  $dbArray = mysqli_fetch_array($query);
  $dbPhoneMail = $dbArray[0];
  $dbPassword = $dbArray[1];
  $dbUserr = $dbArray[2];

  // Validacao de login
  if (($phoneMail == $dbPhoneMail or $phoneMail == $dbUserr) && $password == $dbPassword) {
    include_once("../Model/session.php");
    header('Location: ../View/feed.php');
  } else {
    header('Location: ../View/login.html');
  }

  // Fim da conexao
  mysqli_close($dbConnection);