<?php
    // include('header.php');
    include('connection.php');
    session_start();
    session_unset();
    session_destroy();

    header('location:http://localhost:82/classc2/crud/login.php');
    ?>