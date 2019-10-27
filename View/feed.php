<?php 
    session_start();
    include_once('../Model/verify.php');
;?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://www.instagram.com/static/images/ico/favicon.ico/36b3ee2d91ed.ico" type="image/x-icon"/>
    <script src="./js/font-awesome-all.js"></script>
    <script src="./js/alerts.js"></script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/auxiliary.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/feed.css">
    <title>InstaMVP - @<?php echo $_SESSION['user']?></title>
</head>
<body>
    <?php  
        include_once('./template/navbar.php');
        include_once('../Controller/showPosts.php');
    ?>
</body>
</html>
