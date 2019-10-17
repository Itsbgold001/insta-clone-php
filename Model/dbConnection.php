<?php
class dbConnection {
    $dbHost = 'https://localhost/phpmyadmin/instamvp';
    $dbUser = 'root';
    $dbPassword = '123';
    $dbName = 'instamvp';
    $dbConnection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);   
}
