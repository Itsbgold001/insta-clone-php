<?php
             include_once ("/wamp64/www/instaMVP/Controller/Conexao.php");
             session_start ();
               
              if( isset($_POST['entrar'])){
                $erros = array();
                $phoneMail = mysqli_real_scape_string($conexao, $_POST['phoneMail']);
                $senha = mysqli_real_scape_string($conexao, $_POST['senha']);

                if(empty($phoneMail) or empty($senha)){
                 $erros[] = "<li> O campo login e senha precisam ser preenchidos</li>";
                 
                }
                else{
                 $sql = "SELECT phoneMail FROM usuarios WHERE phoneMail = '$phoneMail'";
                 $resultado = mysqli_query($conexao,$sql);
                 

                 }
                 if(mysqli_num_rows($resultado) > 0){
                     $senha = ($senha);
                     $sql = "SELECT * FROM usuarios WHERE phoneMail = '$phoneMail' AND senha = '$senha'";
                     echo "<p style= 'color: green; font-size: 40px;'>LOGADO</p>";   
                    

                     $resultado = mysqli_query($conexao,$sql);
       mysqli_close($conexao);
                   
                 }
            }
            ?>