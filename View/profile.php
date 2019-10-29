<?php 
    session_start();
    include_once('../Model/verify.php');

?>
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
    <link rel="stylesheet" href="./css/profile.css">
    <script src="./js/font-awesome-all.js"></script>
    <script src="./js/alerts.js"></script>
    <title><?php echo "$_SESSION[name] "; echo "(@".$_SESSION['user'].")"; ?></title>
</head>
<body>
<?php 
    include_once('template/navbar.php'); 
    include_once('../Controller/ProfileData.php');
    $pd = new ProfileData();
    $pd->profile($_SESSION['user']);
?>
<i class="fas fa-cog"></i>

    <section class="content994 mt150">

        <header class="profile">

            <div class="image dib">
                <img src="../Database/users/<?php echo $_SESSION['photo'];?>">
            </div>  

            <div class="info dib">

                <head class="user">
                    <h2 class="dib"><?php echo $_SESSION['user']?></h2>
                    <!--<button class="follow dib btn-facebook">Seguir</button>-->
                    <!-- <i class="fas fa-user-edit"> -->
                    <a href="settings.php"><button class="follow dib btn-facebook">Editar perfil</button></a>
                    </i><i class="fas fa-cog"></i>
                </head>

                <div class="numbers">
                    <p> <strong><?php echo $_SESSION['posts'];?></strong> publicações</p>
                    <p> <strong><?php echo $_SESSION['followers'];?></strong> seguidores</p>
                    <p> <strong><?php echo $_SESSION['follow'];?></strong> seguindo</p>
                </div>

                <footer class="footer">
                    <h3><?php echo $_SESSION['name'];?></h3><br>
                    <p><?php echo $_SESSION['bio'];?></p><br>
                    <a href="http://localhost/instaMVP/View/profile.php">www.instamvp/<?php echo $_SESSION['user'];?>.com.br</a>
                </footer>

            </div>
        </header>

        <?php
    include_once('template/navbar.php'); 
    include_once('../Controller/PostsData.php');
    $pd = new PostsData();
    $pd->postProfile();
        ?>
    </section>

</body>
</html>