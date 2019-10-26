<?php
    session_start();
    session_unset();
    
    $sql = "SELECT * FROM users WHERE phoneMail = '$phoneMail'";
    $query = mysqli_query($dbConnection, $sql);
    $dbArray = mysqli_fetch_array($query);

    session_start();
    $_SESSION['id'] = $dbArray[0];
    $_SESSION['phoneMail'] = $dbArray[1];
    $_SESSION['name'] = $dbArray[2];
    $_SESSION['user'] = $dbArray[3];
    $_SESSION['pass'] = $dbArray[4];
    $_SESSION['bio'] = $dbArray[5];
    $_SESSION['verified'] = $dbArray[6];
    $_SESSION['followers'] = $dbArray[7];
    $_SESSION['follow'] = $dbArray[8];
    $_SESSION['posts'] = $dbArray[9];
    $_SESSION['photo'] = $dbArray[10];
    