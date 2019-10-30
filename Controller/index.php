<?php
   // Chama conexao
   include("../Model/dbConnection.php");
   include_once('../Model/htmlVars.php');
   $Con = new Conexao();
   $Con->Cadastro($phoneMail,$completeName,$user,$password);

   // Inclui a session e redireciona
   include_once('../Model/session.php');
   header('Location: ../View/feed.php');
