<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name - Retain Previous</title>
</head>
<body>

<?php
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
    } else {
        $name = "";
    }
?>

    <form action="retain-previous.php" method="post">
        <fieldset>
            <legend><b>NAME</b></legend>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_REQUEST['submit'])){
        echo "<p>Name: " . $name . "</p>";
    } else {
        echo "<p>Please enter your name and click Submit.</p>";
    }
?>

</body>
</html>
