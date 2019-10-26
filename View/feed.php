<?php session_start();?>
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
    <title>InstaMVP - @<?php echo $_SESSION['user']?></title>
    </title>
    <style>
        .post{
            width: 620px;
            padding-bottom: 10px;
            background: #fff;
            border: 1px rgb(230, 230, 230) solid;
            border-radius: 3px;
            box-shadow: #eee 1px 1px 2px;
            margin-top: 60px;
        }
        .post .bar{
            width: 100%;
            height: 60px;
        }
        .post .image img{
            width: 100%;
        }
        .post .icons, .liked, .coments{
            padding: 10px 15px;
        }


        .menu {
            padding: 50px;
            transition: padding 0.5s;
            background-color: #ccf;
            margin-bottom: 10px;
        }
        .abrir {
            padding: 0px;
        }
    </style>
</head>
<body>
    <?php  
        include_once('./template/navbar.php');
        include_once('../Controller/showPosts.php');
    ?>
</body>
</html>
