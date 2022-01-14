<?php

    session_start();
    
    $host = "localhost";
    $username = "username";
    $password = "password";
    $db = "database";

    $connection = new mysqli($host, $username, $password, $db);
    // Check connection
    if($connection->connect_error){
        die('Database connection failed');
    }