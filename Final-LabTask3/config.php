<?php
    session_start();

    $admin_id       = "admin";
    $admin_password = "admin";

    if(!isset($_SESSION['products'])){
        $_SESSION['products'] = [
            ["id" => 1, "name" => "Laptop",   "price" => 55000],
            ["id" => 2, "name" => "Mouse",    "price" => 500],
            ["id" => 3, "name" => "Keyboard", "price" => 800],
            ["id" => 4, "name" => "Monitor",  "price" => 15000],
        ];
    }
    if(!isset($_SESSION['customers'])){
        $_SESSION['customers'] = [];
    }

    if(!isset($_SESSION['next_id'])){
        $_SESSION['next_id'] = 5;
    }
?>
