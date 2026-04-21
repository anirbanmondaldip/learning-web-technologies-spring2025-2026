<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name - Current Page</title>
</head>
<body>

    <form action="display-on-current.php" method="post">
        <fieldset>
            <legend><b>NAME</b></legend>
            <input type="text" name="name">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo "<p>Name: " . $name . "</p>";
    } else {
        echo "<p>Please enter your name and click Submit.</p>";
    }
?>

</body>
</html>
