<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group - Current Page</title>
</head>
<body>

    <form action="display-on-current.php" method="post">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>
            <select name="blood_group">
                <option value="">-- Select --</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_POST['submit'])){
        if($_POST['blood_group'] != ''){
            $blood_group = $_POST['blood_group'];
            echo "<p>Blood Group: " . $blood_group . "</p>";
        } else {
            echo "<p>No blood group was selected.</p>";
        }
    } else {
        echo "<p>Please select your blood group and click Submit.</p>";
    }
?>

</body>
</html>
