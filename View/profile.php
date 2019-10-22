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
    <script src="./js/font-awesome-all.js"></script>
    <script src="./js/alerts.js"></script>
    <title><?php echo "$_SESSION[name] "; echo "(@".$_SESSION['user'].")"; ?></title>
</head>
<body>
<?php include_once('./template/navbar.php'); ?>
<i class="fas fa-cog"></i>

    <section class="content994 mt150">
        <header class="info">
            <img src="/database/user/01.png">
            <h2><?php echo $_SESSION['user'] ?></h2>
        </header>
    </section>

</body>
</html>