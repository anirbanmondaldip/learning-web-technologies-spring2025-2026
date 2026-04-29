<?php
    require_once '../../config/db.php';
    require_once '../../models/customer_model.php';

    if(isset($_POST['submit'])){

        $entered_email    = $_POST['email'];
        $entered_password = $_POST['password'];

        $customer = getCustomerByEmail($conn, $entered_email);

        if($customer && $customer['password'] == $entered_password){

            $_SESSION['customer_logged_in'] = true;
            $_SESSION['customer_name']      = $customer['name'];
            $_SESSION['customer_email']     = $customer['email'];

            header("Location: ../views/home.php");
            exit();

        } else {

            echo "<p>Invalid email or password. <a href='../views/login.html'>Try Again</a></p>";

        }

    } else {

        header("Location: ../views/login.html");
        exit();

    }
?>
