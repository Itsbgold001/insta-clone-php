<?php
   // Chama conexao
   include_once('../Model/dbConnection.php');
   include_once('../Model/htmlVars.php');
   
   // Introduzir ao banco de dados
   $sql = "INSERT INTO users (phoneMail, completeName, user, pass, bio, followers, follow, posts, photo) 
   VALUES ('$phoneMail', '$completeName', '$user', '$password', 'Oi, bem vindo ao meu perfil!', '0', '0', '0', 'default')";
   $query = mysqli_query($dbConnection, $sql);
      
   // Inclui a session e redireciona
   include_once('../Model/session.php');
   header('Location: ../View/feed.php');