<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree - Retain Previous</title>
</head>
<body>

<?php
    if(isset($_REQUEST['submit'])){
        if(isset($_REQUEST['degree'])){
            $degrees = $_REQUEST['degree'];
        } else {
            $degrees = [];
        }
    } else {
        $degrees = [];
    }
?>

    <form action="retain-previous.php" method="post">
        <fieldset>
            <legend><b>DEGREE</b></legend>

            <input type="checkbox" name="degree[]" value="SSC"
                <?php if(in_array('SSC', $degrees)) echo 'checked'; ?>> SSC

            <input type="checkbox" name="degree[]" value="HSC"
                <?php if(in_array('HSC', $degrees)) echo 'checked'; ?>> HSC

            <input type="checkbox" name="degree[]" value="BSc"
                <?php if(in_array('BSc', $degrees)) echo 'checked'; ?>> BSc

            <input type="checkbox" name="degree[]" value="MSc"
                <?php if(in_array('MSc', $degrees)) echo 'checked'; ?>> MSc

            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_REQUEST['submit'])){
        if(!empty($degrees)){
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
