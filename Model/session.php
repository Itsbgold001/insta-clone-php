<?php
    $sql = "SELECT id,user FROM users WHERE phoneMail = '$phoneMail'";
    $query = mysqli_query($dbConnection, $sql);

    $dbArray = mysqli_fetch_array($query);
    $dbId = $dbArray[0];
    $dbUser = $dbArray[1];

    session_start();
    $_SESSION['id'] = $dbId;
    $_SESSION['user'] = $dbUser;