<?php
    require_once '../model/db.php';
    require_once '../model/employeeModel.php';

    if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
        header("Location: login.php");
        exit();
    }

    if(isset($_GET['id'])){
        $employee = getEmployeeById($conn, $_GET['id']);

        if(!$employee){
            echo "<p>Employee not found. <a href='home.php'>Go Back</a></p>";
            exit();
        }
    }else{
        header("Location: home.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Employee</title>
</head>
<body>

    <h2>Update Employee</h2>
    <hr>

    <form action="../controller/employeeController.php" method="post">
        <fieldset>
            <legend><b>UPDATE EMPLOYEE</b></legend>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

            <label>Employee Name:</label><br>
            <input type="text" name="employee_name" value="<?php echo $employee['employee_name']; ?>"><br><br>

            <label>Contact No:</label><br>
            <input type="text" name="contact_no" value="<?php echo $employee['contact_no']; ?>"><br><br>

            <label>Username:</label><br>
            <input type="text" name="username" value="<?php echo $employee['username']; ?>"><br><br>

            <label>Password:</label><br>
            <input type="text" name="password" value="<?php echo $employee['password']; ?>"><br><br>

            <input type="submit" name="submit" value="Update">
        </fieldset>
    </form>

    <br>
    <a href="home.php">Back to Employee List</a>

</body>
</html>
