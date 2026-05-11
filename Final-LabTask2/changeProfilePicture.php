<?php
    session_start();

    if(!isset($_SESSION['status'])){
        header('location: login.php');
    }

    $name = "";
    $picture = "";

    foreach($_SESSION['users'] as $user){
        if($user['username'] == $_SESSION['username']){
            $name = $user['name'];
            $picture = $user['picture'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Profile Picture</title>
</head>
<body>
        <h2>XCompany</h2>
        Logged in as <a href="viewProfile.php"><?php echo $name; ?></a> |
        <a href="logout.php">Logout</a>

        <hr>
        <b>Account</b>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li><a href="changeProfilePicture.php">Change Profile Picture</a></li>
            <li><a href="changePassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

        <form method="post" action="changeProfilePictureCheck.php">
            <fieldset>
                <legend><b>PROFILE PICTURE</b></legend>
                <?php if($picture != ""){ ?>
                    <img src="<?php echo $picture; ?>" width="100" height="100" alt="Profile Picture">
                    <br><br>
                <?php } ?>

                Picture Link<br>
                <input type="text" name="picture" value="<?php echo $picture; ?>"> <br><br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
        <hr>
        <p>Copyright &copy; 2017</p>
</body>
</html>
