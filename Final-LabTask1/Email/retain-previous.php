<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email - Retain Previous</title>
</head>
<body>

<?php
    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];
    } else {
        $email = "";
    }
?>

    <form action="retain-previous.php" method="post">
        <fieldset>
            <legend><b>EMAIL</b></legend>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_REQUEST['submit'])){
        echo "<p>Email: " . $email . "</p>";
    } else {
        echo "<p>Please enter your email and click Submit.</p>";
    }
?>

</body>
</html>
