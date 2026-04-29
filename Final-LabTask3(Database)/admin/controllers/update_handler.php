<?php
    require_once '../../config/db.php';
    require_once '../../models/product_model.php';

    if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
        header("Location: ../views/login.html");
        exit();
    }

    if(isset($_POST['submit'])){

        $update_id = $_POST['id'];
        $new_name  = $_POST['name'];
        $new_price = $_POST['price'];

        if($new_name != "" && $new_price != ""){

            updateProduct($conn, $update_id, $new_name, $new_price);

            header("Location: ../views/home.php");
            exit();

        } else {

            echo "<p>All fields are required. <a href='../views/update.php?id=" . $update_id . "'>Go Back</a></p>";

        }

    } else {

        header("Location: ../views/home.php");
        exit();

    }
?>
