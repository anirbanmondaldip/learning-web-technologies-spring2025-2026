<?php
    require_once '../../config/db.php';

    $_SESSION['customer_logged_in'] = false;
    unset($_SESSION['customer_name']);
    unset($_SESSION['customer_email']);

    header("Location: ../views/login.html");
    exit();
?>
