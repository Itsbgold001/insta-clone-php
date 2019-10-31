<?php
   // Inclui e instancia a classe Conexao
   include("../Model/dbConnection.php");
   $con = new Conexao();

   // Inclui as variaveis com os dados do html
   include_once('../Model/htmlVars.php');

   // Cadastra usuario
   $con->cadastro($phoneMail,$completeName,$user,$password);

   // Inclui a session e redireciona
   include_once('../Model/session.php');
   header('Location: ../View/feed.php');
