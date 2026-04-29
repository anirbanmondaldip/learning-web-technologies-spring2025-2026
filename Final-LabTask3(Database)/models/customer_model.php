<?php
    // Model: handles all customer-related database queries

    function getCustomerByEmail($conn, $email){
        $email  = mysqli_real_escape_string($conn, $email);
        $result = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email'");
        return mysqli_fetch_assoc($result);
    }

    function insertCustomer($conn, $name, $email, $password){
        $name     = mysqli_real_escape_string($conn, $name);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        mysqli_query($conn, "INSERT INTO customers (name, email, password) VALUES ('$name', '$email', '$password')");
    }
?>
