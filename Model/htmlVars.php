<?php
    $phoneMail    = filter_input(INPUT_POST, 'phoneMail',    FILTER_SANITIZE_STRING);
    $completeName = filter_input(INPUT_POST, 'completeName', FILTER_SANITIZE_STRING);
    $user         = filter_input(INPUT_POST, 'user',         FILTER_SANITIZE_STRING);
    $password     = filter_input(INPUT_POST, 'password',     FILTER_SANITIZE_STRING);
    $subtitle     = filter_input(INPUT_POST, 'subtitle',     FILTER_SANITIZE_STRING);
    $hashtag      = filter_input(INPUT_POST, 'hashtag',      FILTER_SANITIZE_STRING);
    $afterPass    = filter_input(INPUT_POST, 'afterPass',    FILTER_SANITIZE_STRING);
    $confirmPass  = filter_input(INPUT_POST, 'confirmPass',  FILTER_SANITIZE_STRING);