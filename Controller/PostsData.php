<?php
    class PostsData {

        public function postFeed(){
            session_start();
            include_once('../Model/verify.php');
            include("../Model/dbConnection.php");     
        
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
                $row = mysqli_fetch_assoc($query);
                $sql2 = "SELECT photo FROM users WHERE user = '$row[user]'";
                $query2 = mysqli_query($dbConnection,$sql2);
                $dbArray = mysqli_fetch_array($query2);
                $user = $dbArray[0];
                echo "
                    <div class='post content994'>
                        <div class='bar'>
                            <img src='../Database/users/" .$user. "' width=50px' height='50px' style='border-radius:100%; margin:6px;'> </img>
                            <strong>$row[user]</strong>
                            <i></i>
                        </div>
        
                        <figure class='image'>
                            <img src='../Database/posts/" .$photo['photo']. "' width='500px'> </img>
                        </figure>   
                        
                        <div class='icons'>
                            <i class='far fa-heart'></i>
                            <i class='far fa-comment'></i>
                            <i class='far fa-share-square'></i>
                            <i class='far fa-bookmark'></i> 
                        </div>
                ";
        
                echo "
                        <div class='liked'>
                            <p>Curtido por <strong>$row[likes] pessoas</strong></p>
                        </div>
                        <div class='coments'>    
                ";
        
                if ($row['subtitle'] != NULL) {
                    echo "<p><strong>$row[user]:</strong> $row[subtitle]</p><br>";
                } 
                if ($row['hashtags'] != NULL) {
                    echo "<p>$row[hashtags]</p><br>";
                } 
                echo "
                        <p>$row[dateNow]</p>
                    </div>
                </div>
                ";
                
            }
   
            mysqli_close($dbConnection);

        }

        public function postProfile(){
            session_start();
            include_once('../Model/verify.php');
            include("../Model/dbConnection.php");     

            $sql = "SELECT photo FROM posts WHERE user = '$_SESSION[user]'";
            $result = mysqli_query($dbConnection, $sql);
            
            while ($row = mysqli_fetch_array($result)){
                $album[] = $row;   
            }

            $sql = "SELECT * FROM posts  WHERE user = '$_SESSION[user]'";
            $query = mysqli_query($dbConnection,$sql);
            
            if($sql === FALSE) { 
                die(mysqli_error(""));
            }
            
            
            foreach ($album as $photo){
                $row = mysqli_fetch_assoc($query);
                $sql2 = "SELECT photo FROM users WHERE user = '$row[user]'";
                $query2 = mysqli_query($dbConnection,$sql2);
                $dbArray = mysqli_fetch_array($query2);
                $user = $dbArray[0];
                echo "
                        <figure class='image-feed' style='display: inline-block; padding: 10px 20px'>
                            <img src='../Database/posts/".$photo['photo']."' width='281px' height='281px'></img>
                        </figure>   
                ";
                }
                mysqli_close($dbConnection);
        }
    }