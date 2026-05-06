<?php
    session_start();

    $host     = "localhost";
    $dbname   = "online_shop_management";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>
