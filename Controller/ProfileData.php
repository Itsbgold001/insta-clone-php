<?php
    class ProfileData {
        
        public function profile() {
            include_once('../Model/dbConnection.php');
            $sql = "SELECT completeName, user, bio, followers, follow, posts, photo FROM users WHERE user = '$_SESSION[user]'";
            $query = mysqli_query($dbConnection, $sql);

            // Resultado da pesquisa
            $dbArray = mysqli_fetch_array($query);
            $dbName = $dbArray[0];
            $dbUser = $dbArray[1];
            $dbBio = $dbArray[2];
            $dbFollowers = $dbArray[3];
            $dbFollow = $dbArray[4];
            $dbPosts = $dbArray[5];
            $dbPhoto = $dbArray[6];
        }   
    }