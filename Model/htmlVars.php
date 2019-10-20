<?php
    $phoneMail = filter_input(INPUT_POST,'phoneMail',FILTER_SANITIZE_STRING);
    $completeName = filter_input(INPUT_POST,'completeName',FILTER_SANITIZE_STRING);
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);