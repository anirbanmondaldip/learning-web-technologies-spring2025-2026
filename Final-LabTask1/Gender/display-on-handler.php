<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender - Handler Page</title>
</head>
<body>

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            echo "<p>Gender: " . $gender . "</p>";
        } else {
            echo "<p>No gender was selected.</p>";
        }
    } else {
        echo "<p>No data submitted. Please go back and fill the form.</p>";
    }
?>

</body>
</html>
