<?php 
  // Inclui a classe de conexao e os dados do html
  include_once('../Model/dbConnection.php');
  include_once('../Model/htmlVars.php');

  // Instancia a classe conexao e chama o metodo login
  $con = new Conexao();
  $con->login($phoneMail,$password);
