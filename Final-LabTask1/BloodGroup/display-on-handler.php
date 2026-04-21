<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group - Handler Page</title>
</head>
<body>

<?php
    if(isset($_POST['submit'])){
        if($_POST['blood_group'] != ''){
            $blood_group = $_POST['blood_group'];
            echo "<p>Blood Group: " . $blood_group . "</p>";
        } else {
            echo "<p>No blood group was selected.</p>";
        }
    } else {
        echo "<p>No data submitted. Please go back and fill the form.</p>";
    }
?>

</body>
</html>
