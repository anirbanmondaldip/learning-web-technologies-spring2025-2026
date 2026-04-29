<?php
    require_once '../../config/db.php';
    require_once '../../models/product_model.php';

    if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
        header("Location: ../views/login.html");
        exit();
    }

    if(isset($_POST['submit'])){

        $name  = $_POST['name'];
        $price = $_POST['price'];

        if($name != "" && $price != ""){

            insertProduct($conn, $name, $price);

            header("Location: ../views/home.php");
            exit();

        } else {

            echo "<p>All fields are required. <a href='../views/insert.html'>Go Back</a></p>";

        }

    } else {

        header("Location: ../views/insert.html");
        exit();

    }
?>
