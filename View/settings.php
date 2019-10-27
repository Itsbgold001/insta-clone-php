<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://www.instagram.com/static/images/ico/favicon.ico/36b3ee2d91ed.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/auxiliary.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/settings.css">
    <script src="./js/font-awesome-all.js"></script>
    <script src="./js/alerts.js"></script>
    <title>Editar perfil - InstaMVP</title>
</head>
<body>

    <main class="content994">
        <div class="menu dib">
            <ul>
                <li class="active">Editar perfil</li>
                <li>Alterar senha</li>
                <li>Aplicativos autorizados</li>
                <li>Email e SMS</li>
                <li>Gerenciar contatos</li>
                <li>Privacidade e segurança</li>
                <li>Atividade de login</li>
                <li>Emails do instaMVP</li>
            </ul>
        </div>

        <div class="data dib">
            <div class="profile">
                <div class="user">
                    <img class="dib" src='../Database/users/<?php echo $_SESSION['photo']; ?>'>
                    <h3 class="dib"><?php echo $_SESSION['user']; ?></h3><br>
                    <a class="dib" href="#">Alterar foto do perfil</a>
                </div>
                <div class="inputs">
                    <label>Nome</label>
                    <input type="text" name=""><br>

                    <label>Nome de uauário</label>
                    <input type="text" name=""><br>

                    <label>Site</label>
                    <input type="text" name=""><br>

                    <label>biografia</label>
                    <input type="text" name=""><br>

                    <label>Email</label>
                    <input type="text" name=""><br>

                    <label>Sexo</label>
                    <select name="">
                        <option value="outro">Prefiro não dizer</option>
                        <option value="masculino">Maculino</option>
                        <option value="masculino">Feminino</option>
                    </select>
                </div>
            </div>
        </div>
    </main>









    <form action="../Model/changePass.php" method="post" style="display: none">
        <div>
            <label for="senha">Senha Antiga:</label>
            <input type="password" name="password" required placeholder="Informe sua senha antiga" />
        </div>
        
        <div>
            <label for="nova_senha">Nova Senha:</label>
            <input type="password" name="afterPass" required placeholder="Nova senha" />
        </div>
        
        <div>
            <label for="senha_confirma">Confirme a nova senha:</label>
            <input type="password" name="confirmPass" required placeholder="Confirme sua senha" />
        </div>
        
        <input type="submit" value="Alterar Senha">
    </form>
</body>
</html>            