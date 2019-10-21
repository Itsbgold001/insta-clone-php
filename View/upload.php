<?php
session_start();
include_once('../Model/dbConnection.php');
include_once('../Model/htmlVars.php');

if(isset($_POST['sendPhoto'])){
    
    $format = array("png","jpeg","jpg",);
    $extension = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
   
    if(in_array($extension, $format)){
        $diretory = "post/";
        $temp = $_FILES['photo']['tmp_name'];
        $newName = uniqid().".$extension";
 
        if(move_uploaded_file($temp,$diretory.$newName)){

            $sql = "INSERT INTO posts (idUser, photo, subtitle, hashtags, dateNow) VALUES ('1', '$newName', '$subtitle', '$hastag', NOW())";
            $query = mysqli_query($dbConnection, $sql);
            header('Location: feed.php');

        } else {
            echo "<span style='color: red;'> Erro ao enviar a photo </span>";
        }

    } else {
        echo "<span style='color: red;'> $extension não é permitido(a) </span>";
    }
        
}

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
    <link rel="stylesheet" href="./css/upload.css">
    <script src="./js/font-awesome-all.js"></script>
    <title>InstaMVP - @<?php echo $_SESSION['user'];?></title>
</head>
<body>
    <?php 
        include_once('./template/navbar.php');
    ?>

    <main class="content994">
        <form class="upload box" action="" method="post" enctype="multipart/form-data">
            <h2>Escolha sua foto</h2>
            <input class="dib" type="file" name="photo"><br>
            <textarea class="dib" placeholder="Escreva aqui sua legenda..." name="subtitle" id="" cols="30" rows="5"></textarea><br>
            <textarea class="dib" placeholder="#coloque #aqui #suas #hastags #:)" name="hastag" id="" cols="30" rows="2" maxlength="85"></textarea><br>
            <input type="submit" name="sendPhoto" value="Enviar">
            <a href="feed.php">Voltar</a>
        </form>
    </main>
</body>
</html>