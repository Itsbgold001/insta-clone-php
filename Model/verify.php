<?php
    if (!isset($_SESSION['user'])) {
        header('Location: ../View/login.html');
    }