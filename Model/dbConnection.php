<?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'instamvp';
    $dbConnection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName) or die ("Sem conexão com o servidor");   
