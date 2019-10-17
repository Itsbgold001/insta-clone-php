<?php 
/*
  include_once ("./Controller/Conexao.php");
  session_start ();
    
  if( isset($_POST['entrar'])){
    $erros = array();
    $phoneMail = mysqli_real_scape_string($conexao, $_POST['phoneMail']);
    $password = mysqli_real_scape_string($conexao, $_POST['password']);

    if(empty($phoneMail) or empty($password)){
      $erros[] = "<li> O campo login e password precisam ser preenchidos</li>";
    }else{
      $sql = "SELECT phoneMail FROM usuarios WHERE phoneMail = '$phoneMail'";
      $resultado = mysqli_query($conexao,$sql);
    }

    if(mysqli_num_rows($resultado) > 0){
      $password = ($password);
      $sql = "SELECT * FROM usuarios WHERE phoneMail = '$phoneMail' AND password = '$password'";
      echo "<p style= 'color: green; font-size: 40px;'>LOGADO</p>";   
      $resultado = mysqli_query($conexao,$sql);
      mysqli_close($conexao);
    }
  }
  */

  $sql = "SELECT user,password FROM users WHERE user = $user";
  $query = mysqli_query($dbConnection, $sql);
  mysqli_close($dbConnection);

if ($user == $dbUser && $password == $dbPassword) {
  header();
} else {
  # code...
}



?>