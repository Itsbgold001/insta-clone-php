<?php
                    // Chama conexao
                    include_once ("/wamp64/www/instaMVP/Controller/Conexao.php");
                    
                    // HTML
                    $phoneMail = filter_input(INPUT_POST,'phoneMail',FILTER_SANITIZE_STRING);
                    $nome = filter_input(INPUT_POST,'completeName',FILTER_SANITIZE_STRING);
                    $usuario = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
                    $senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                    
                    // Introduzir ao banco de dados
                    $sql = "INSERT INTO usuarios (phoneMail,nome,usuario,senha) VALUES ('$phoneMail','$nome','$usuario', '$senha')";
                    $salvar = mysqli_query($conexao, $sql);
                        
                    // Fim da conexao
                    mysqli_close($conexao);

                   // <input type="email" placeholder="Confirmação de e-mail" name="email2">
                ?>