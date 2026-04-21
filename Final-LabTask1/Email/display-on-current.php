<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email - Current Page</title>
</head>
<body>

    <form action="display-on-current.php" method="post">
        <fieldset>
            <legend><b>EMAIL</b></legend>
            <input type="email" name="email">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        echo "<p>Email: " . $email . "</p>";
    } else {
        echo "<p>Please enter your email and click Submit.</p>";
    }
?>

</body>
</html>
