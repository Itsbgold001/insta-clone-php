<?php
    session_start();
    include_once('../Model/dbConnection.php');     

    $sql = "SELECT * FROM posts";
    $result = mysqli_query($dbConnection, $sql);
    
    while ($row = mysqli_fetch_array($result)){
        $album[] = $row;   
    }

    $sql = "SELECT * FROM posts";
    $query = mysqli_query($dbConnection,$sql);
    
    if($sql === FALSE) { 
        die(mysqli_error(""));
    }
    
    foreach ($album as $photo){
        echo "
            <div class='post content994'>
                <div class='bar'>
                    <img src=''>
                    <strong>$_SESSION[user]</strong>
                    <i></i>
                </div>

                <figure class='image'>
                    <img src='./post/" .$photo['photo']. "' width='500px'> </img>
                </figure>   
                
                <div class='icons'>
                    <i class='far fa-heart'></i>
                    <i class='far fa-comment'></i>
                    <i class='far fa-share-square'></i>
                    <i class='far fa-bookmark'></i> 
                </div>
        ";

        $row = mysqli_fetch_assoc($query);
            echo "
                    <div class='liked'>
                        <p>Curtido por <strong>$row[likes] pessoas</strong></p>
                    </div>
                    <div class='coments'>
                        <p><strong>$row[user]</strong> $row[subtitle]</p>
                        <p>$row[hashtags];</p>
                        <p>$row[dateNow]</p>
                    </div>
                </div>
            ";
        
    }



    mysqli_close($dbConnection);