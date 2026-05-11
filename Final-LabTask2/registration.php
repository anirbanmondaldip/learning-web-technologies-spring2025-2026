<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
        <h2>XCompany</h2>
        <a href="index.php">Home</a> |
        <a href="login.php">Login</a> |
        <a href="registration.php">Registration</a>

        <hr>
        <form method="post" action="registrationCheck.php">
            <fieldset>
                <legend><b>REGISTRATION</b></legend>
                Name<br>
                <input type="text" name="name" value=""> <br><br>
                Email<br>
                <input type="email" name="email" value=""> <br><br>
                User Name<br>
                <input type="text" name="username" value=""> <br><br>
                Password<br>
                <input type="password" name="password" value=""> <br><br>
                Confirm Password<br>
                <input type="password" name="confirm_password" value=""> <br><br>

                Gender<br>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other <br><br>

                Date of Birth<br>
                <input type="text" name="dob" value="" placeholder="dd/mm/yyyy"> <br><br>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
            </fieldset>
        </form>
        <hr>
        <p>Copyright &copy; 2017</p>
</body>
</html>
