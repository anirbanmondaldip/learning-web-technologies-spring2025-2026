<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
</head>
<body>

    <form action="../controller/employeeController.php" method="post">
        <fieldset>
            <legend><b>ADMIN LOGIN</b></legend>
            <input type="hidden" name="action" value="login">

            <label>Username:</label><br>
            <input type="text" name="username" value=""><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" value=""><br><br>

            <input type="submit" name="submit" value="Login">
        </fieldset>
    </form>

    <p>Default admin username: admin, password: admin</p>

</body>
</html>
