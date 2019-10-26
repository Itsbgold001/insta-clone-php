<?php session_start();?>
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
            <div class="profileImage dib">
                <?php #echo "<img src='$dbPhoto'>" ?>
                <img src="../Database/users/guicaires.jpg">
            </div>  

            <div class="profileInfo dib">
                <head class="profileUser">
                    <h2 class="dib"><?php echo $_SESSION['user']?></h2>
                    <button class="follow dib btn-facebook">Seguir</button><br>
                </head>
                <div class="profileNumbers">
                    <p> <strong><?php #echo $pd->dbPosts; ?>30</strong> publicações</p>
                    <p> <strong><?php #echo $pd->dbFollowers; ?>300</strong> seguidores</p>
                    <p> <strong><?php #echo $pd->dbFollow; ?>25</strong> seguindo</p>
                </div>
                <footer class="profileFooter">
                    <h3>Guilherme Caires</h3>
                    <p>16.02.2001</p><br>
                    <a href="">@fotografia_caires</a>
                </footer>
            </div>
        </header>
    </section>

</body>
</html>