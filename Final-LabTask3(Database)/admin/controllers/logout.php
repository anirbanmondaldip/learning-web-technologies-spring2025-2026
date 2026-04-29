<?php
    require_once '../../config/db.php';

    $_SESSION['admin_logged_in'] = false;
    unset($_SESSION['admin_id']);

    header("Location: ../views/login.html");
    exit();
?>
