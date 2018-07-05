<?php
    // Connect to DB
    $connect = mysqli_connect("localhost", "root", "", "loginapp");

    // Test connection
    if (!$connect) {
        die("DB Connection Failed");
    }
