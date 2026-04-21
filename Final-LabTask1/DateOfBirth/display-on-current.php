<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date of Birth - Current Page</title>
</head>
<body>

    <form action="display-on-current.php" method="post">
        <fieldset>
            <legend><b>DATE OF BIRTH</b></legend>
            dd &nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>
            <input type="text" name="dd" size="2" maxlength="2"> /
            <input type="text" name="mm" size="2" maxlength="2"> /
            <input type="text" name="yyyy" size="4" maxlength="4">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if(isset($_POST['submit'])){
        $dd   = $_POST['dd'];
        $mm   = $_POST['mm'];
        $yyyy = $_POST['yyyy'];
        echo "<p>Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy . "</p>";
    } else {
        echo "<p>Please enter your date of birth and click Submit.</p>";
    }
?>

</body>
</html>
