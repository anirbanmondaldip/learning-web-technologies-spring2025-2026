<?php
    require_once '../model/db.php';
    require_once '../model/employeeModel.php';

    if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
        header("Location: login.php");
        exit();
    }

    $employees = getAllEmployees($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Management</title>
    <script src="../asset/script.js"></script>
</head>
<body>

    <h2>Online Shop Management System</h2>
    <hr>

    <a href="register.php">Register New Employee</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="../controller/employeeController.php?action=logout">Logout</a>

    <hr>

    <h3>Search Employee</h3>
    <input type="text" id="keyword" onkeyup="searchEmployee()" placeholder="Search by name, contact or username">

    <h3>Employee List</h3>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Contact No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <tbody id="employeeTable">
            <?php foreach($employees as $employee){ ?>
                <tr>
                    <td><?php echo $employee['id']; ?></td>
                    <td><?php echo $employee['employee_name']; ?></td>
                    <td><?php echo $employee['contact_no']; ?></td>
                    <td><?php echo $employee['username']; ?></td>
                    <td><?php echo $employee['password']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $employee['id']; ?>">Update</a>
                        &nbsp;|&nbsp;
                        <a href="../controller/employeeController.php?action=delete&id=<?php echo $employee['id']; ?>" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
