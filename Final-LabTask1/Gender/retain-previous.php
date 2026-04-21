<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender - Retain Previous</title>
</head>
<body>

<?php
    if(isset($_REQUEST['submit'])){
        if(isset($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
        } else {
            $gender = "";
        }
    } else {
        $gender = "";
    }
?>

    <form action="retain-previous.php" method="post">
        <fieldset>
            <legend><b>GENDER</b></legend>

            <input type="radio" name="gender" value="Male"
                <?php if($gender == 'Male') echo 'checked'; ?>> Male

            <input type="radio" name="gender" value="Female"
                <?php if($gender == 'Female') echo 'checked'; ?>> Female

            <input type="radio" name="gender" value="Other"
                <?php if($gender == 'Other') echo 'checked'; ?>> Other

            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_REQUEST['submit'])){
        if($gender != ""){
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
