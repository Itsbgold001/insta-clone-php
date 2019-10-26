<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['user']);
    unset($_SESSION['name']);
    header('Location: ../View/login.html');