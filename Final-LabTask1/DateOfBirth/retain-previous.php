<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date of Birth - Retain Previous</title>
</head>
<body>

<?php
    if(isset($_REQUEST['submit'])){
        $dd   = $_REQUEST['dd'];
        $mm   = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];
    } else {
        $dd   = "";
        $mm   = "";
        $yyyy = "";
    }
?>

    <form action="retain-previous.php" method="post">
        <fieldset>
            <legend><b>DATE OF BIRTH</b></legend>
            dd &nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>
            <input type="text" name="dd" size="2" maxlength="2" value="<?php echo $dd; ?>"> /
            <input type="text" name="mm" size="2" maxlength="2" value="<?php echo $mm; ?>"> /
            <input type="text" name="yyyy" size="4" maxlength="4" value="<?php echo $yyyy; ?>">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_REQUEST['submit'])){
        echo "<p>Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy . "</p>";
    } else {
        echo "<p>Please enter your date of birth and click Submit.</p>";
    }
?>

</body>
</html>
