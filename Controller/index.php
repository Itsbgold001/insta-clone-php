<?php
   // Chama conexao
   include_once ("../Model/dbConnection.php");
   
   // HTML vars
   $phoneMail = filter_input(INPUT_POST,'phoneMail',FILTER_SANITIZE_STRING);
   $completeName = filter_input(INPUT_POST,'completeName',FILTER_SANITIZE_STRING);
   $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
   
   // Introduzir ao banco de dados
   $sql = "INSERT INTO users (phoneMail, completeName, user, pass) VALUES ('$phoneMail', '$completeName', '$user', '$password')";
   $query = mysqli_query($dbConnection, $sql);
      
   // Fim da conexao
   mysqli_close($dbConnection);

   // Faz o cookie e redireciona para o feed
   setcookie('user', $user, time() + 3600 * 24);
   header('Location: ../View/feed.php');