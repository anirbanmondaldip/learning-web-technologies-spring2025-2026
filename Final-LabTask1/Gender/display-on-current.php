<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender - Current Page</title>
</head>
<body>

    <form action="display-on-current.php" method="post">
        <fieldset>
            <legend><b>GENDER</b></legend>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            echo "<p>Gender: " . $gender . "</p>";
        } else {
            echo "<p>No gender was selected.</p>";
        }
    } else {
        echo "<p>Please select your gender and click Submit.</p>";
    }
?>

</body>
</html>
