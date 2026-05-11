<?php
    $username = "";
    if(isset($_COOKIE['username'])){
        $username = $_COOKIE['username'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
        <h2>XCompany</h2>
        <a href="index.php">Home</a> |
        <a href="login.php">Login</a> |
        <a href="registration.php">Registration</a>

        <hr>
        <form method="post" action="loginCheck.php">
            <fieldset>
                <legend><b>LOGIN</b></legend>
                User Name<br>
                <input type="text" name="username" value="<?php echo $username; ?>"> <br><br>
                Password<br>
                <input type="password" name="password" value=""> <br><br>
                <input type="checkbox" name="remember" value="yes"> Remember Me <br><br>
                <input type="submit" name="submit" value="Submit">
                <a href="forgotPassword.php">Forgot Password?</a>
            </fieldset>
        </form>
        <hr>
        <p>Copyright &copy; 2017</p>
</body>
</html>
