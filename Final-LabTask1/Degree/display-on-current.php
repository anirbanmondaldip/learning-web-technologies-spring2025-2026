<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree - Current Page</title>
</head>
<body>

    <form action="display-on-current.php" method="post">
        <fieldset>
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> BSc
            <input type="checkbox" name="degree[]" value="MSc"> MSc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

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
        echo "<p>Please select your degree(s) and click Submit.</p>";
    }
?>

</body>
</html>
