<?php
    session_abort();
    $sql = "SELECT id, user, completeName FROM users WHERE phoneMail or user = '$phoneMail'";
    $query = mysqli_query($dbConnection, $sql);

    $dbArray = mysqli_fetch_array($query);
    $dbId = $dbArray[0];
    $dbUser = $dbArray[1];
    $dbCompleteName = $dbArray[2];

    session_start();
    $_SESSION['id'] = $dbId;
    $_SESSION['user'] = $dbUser;
    $_SESSION['name'] = $dbCompleteName;