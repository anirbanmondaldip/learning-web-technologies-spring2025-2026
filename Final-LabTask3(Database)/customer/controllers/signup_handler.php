<?php
    require_once '../../config/db.php';
    require_once '../../models/customer_model.php';

    if(isset($_POST['submit'])){

        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

        if($name != "" && $email != "" && $password != ""){

            $existing_customer = getCustomerByEmail($conn, $email);

            if($existing_customer){

                echo "<p>This email is already registered. <a href='../views/login.html'>Login Here</a></p>";

            } else {

                insertCustomer($conn, $name, $email, $password);

                echo "<p>Signup successful! <a href='../views/login.html'>Login Here</a></p>";

            }

        } else {

            echo "<p>All fields are required. <a href='../views/signup.html'>Go Back</a></p>";

        }

    } else {

        header("Location: ../views/signup.html");
        exit();

    }
?>
