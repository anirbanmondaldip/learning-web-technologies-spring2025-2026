<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree - Handler Page</title>
</head>
<body>

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['degree'])){
            $degrees = $_POST['degree'];
            echo "<p>Degree(s): ";
            foreach($degrees as $degree){
                echo $degree . " ";
            }
            echo "</p>";
        } else {
            echo "<p>No degree was selected.</p>";
        }
    } else {
        echo "<p>No data submitted. Please go back and fill the form.</p>";
    }
?>

</body>
</html>
