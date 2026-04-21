<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email - Handler Page</title>
</head>
<body>

<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        echo "<p>Email: " . $email . "</p>";
    } else {
        echo "<p>No data submitted. Please go back and fill the form.</p>";
    }
?>

</body>
</html>
