<?php
    require_once '../model/db.php';

    if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Employee</title>
</head>
<body>

    <h2>Register New Employee</h2>
    <hr>

    <form action="../controller/employeeController.php" method="post">
        <fieldset>
            <legend><b>EMPLOYEE REGISTRATION</b></legend>
            <input type="hidden" name="action" value="register">

            <label>Employee Name:</label><br>
            <input type="text" name="employee_name" value=""><br><br>

            <label>Contact No:</label><br>
            <input type="text" name="contact_no" value=""><br><br>

            <label>Username:</label><br>
            <input type="text" name="username" value=""><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" value=""><br><br>

            <input type="submit" name="submit" value="Register">
        </fieldset>
    </form>

    <br>
    <a href="home.php">Back to Employee List</a>

</body>
</html>
