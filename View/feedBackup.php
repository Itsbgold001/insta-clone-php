<?php
  //  include_once('./template/navbar.php');
    include_once('../Model/showPosts.php');
    include_once('../Model/dbConnection.php');     

    $sql = "SELECT * FROM posts";

    $result = mysqli_query($dbConnection, $sql);
    
    while ($row = mysqli_fetch_array($result)){

        $album[] = $row;   
 }



?>
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
    <title>InstaMVP</title>
    </title>
</head>
<body>
<table>
         <tr>
    <?php   
    
    foreach ($album as $photo){

    ?>
    <td>
        <img src="<?php echo"./post/".$photo["photo"]?>" width="260px" height="300px">
        
    </td>
    <?php }
     include_once('../Model/dbConnection.php');     

    $sql1 = "SELECT * FROM posts";

     $dados = mysqli_query($dbConnection,$sql1);
    // $sql = mysqli_query($conexao, "SELECT diasvip FROM login WHERE userid = '".$_POST['userid']."'");
     if($sql1 === FALSE) { 
        die(mysqli_error(""));
     }
     
     while($linha = mysqli_fetch_assoc($dados)){
       echo "Legenda: ".$linha['subtitle'];
       echo "Hashtags: ".$linha['hashtags'];
       echo "Data: ".$linha['dateNow'];


    
     }

     mysqli_close($dbConnection);

?>
 
</tr>

</table>
</body>
</html>