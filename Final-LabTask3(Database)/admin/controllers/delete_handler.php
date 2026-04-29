<?php
    require_once '../../config/db.php';
    require_once '../../models/product_model.php';

    if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
        header("Location: ../views/login.html");
        exit();
    }

    if(isset($_GET['id'])){

        deleteProduct($conn, $_GET['id']);

        header("Location: ../views/home.php");
        exit();

    } else {

        header("Location: ../views/home.php");
        exit();

    }
?>
