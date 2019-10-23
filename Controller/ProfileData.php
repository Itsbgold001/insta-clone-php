<?php
    include_once('../Model/dbConnection.php');

    class ProfileData {
        
        public function profile($user) {
            $sql = "SELECT * FROM users WHERE user = $user";
        }   
    }