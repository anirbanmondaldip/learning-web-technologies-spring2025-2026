<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name - Handler Page</title>
</head>
<body>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo "<p>Name: " . $name . "</p>";
    } else {
        echo "<p>No data submitted. Please go back and fill the form.</p>";
    }
?>

</body>
</html>
