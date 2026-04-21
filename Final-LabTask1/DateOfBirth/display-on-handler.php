<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date of Birth - Handler Page</title>
</head>
<body>

<?php
    if(isset($_POST['submit'])){
        $dd   = $_POST['dd'];
        $mm   = $_POST['mm'];
        $yyyy = $_POST['yyyy'];
        echo "<p>Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy . "</p>";
    } else {
        echo "<p>No data submitted. Please go back and fill the form.</p>";
    }
?>

</body>
</html>
