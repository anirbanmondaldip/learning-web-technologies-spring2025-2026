<?php
    session_start();

    if(!isset($_SESSION['status'])){
        header('location: login.php');
    }

    $name = "";
    foreach($_SESSION['users'] as $user){
        if($user['username'] == $_SESSION['username']){
            $name = $user['name'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
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

        <form method="post" action="changePasswordCheck.php">
            <fieldset>
                <legend><b>CHANGE PASSWORD</b></legend>
                Current Password<br>
                <input type="password" name="current_password" value=""> <br><br>
                New Password<br>
                <input type="password" name="new_password" value=""> <br><br>
                Retype New Password<br>
                <input type="password" name="retype_password" value=""> <br><br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
        <hr>
        <p>Copyright &copy; 2017</p>
</body>
</html>
