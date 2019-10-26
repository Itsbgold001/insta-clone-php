<?php
    session_unset();
    session_abort();
    session_write_close();
    header('Location: ../View/login.html');