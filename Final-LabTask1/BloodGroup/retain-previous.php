<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group - Retain Previous</title>
</head>
<body>

<?php
    if(isset($_REQUEST['submit'])){
        $blood_group = $_REQUEST['blood_group'];
    } else {
        $blood_group = "";
    }
?>

    <form action="retain-previous.php" method="post">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>
            <select name="blood_group">
                <option value="">-- Select --</option>

                <option value="A+"  <?php if($blood_group == 'A+')  echo 'selected'; ?>>A+</option>
                <option value="A-"  <?php if($blood_group == 'A-')  echo 'selected'; ?>>A-</option>
                <option value="B+"  <?php if($blood_group == 'B+')  echo 'selected'; ?>>B+</option>
                <option value="B-"  <?php if($blood_group == 'B-')  echo 'selected'; ?>>B-</option>
                <option value="AB+" <?php if($blood_group == 'AB+') echo 'selected'; ?>>AB+</option>
                <option value="AB-" <?php if($blood_group == 'AB-') echo 'selected'; ?>>AB-</option>
                <option value="O+"  <?php if($blood_group == 'O+')  echo 'selected'; ?>>O+</option>
                <option value="O-"  <?php if($blood_group == 'O-')  echo 'selected'; ?>>O-</option>

            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_REQUEST['submit'])){
        if($blood_group != ''){
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
