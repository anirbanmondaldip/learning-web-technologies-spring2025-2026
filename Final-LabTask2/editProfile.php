<?php
    session_start();

    if(!isset($_SESSION['status'])){
        header('location: login.php');
    }

    $name = "";
    $email = "";
    $gender = "";
    $dob = "";

    foreach($_SESSION['users'] as $user){
        if($user['username'] == $_SESSION['username']){
            $name = $user['name'];
            $email = $user['email'];
            $gender = $user['gender'];
            $dob = $user['dob'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
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

        <form method="post" action="editProfileCheck.php">
            <fieldset>
                <legend><b>EDIT PROFILE</b></legend>
                Name<br>
                <input type="text" name="name" value="<?php echo $name; ?>"> <br><br>
                Email<br>
                <input type="email" name="email" value="<?php echo $email; ?>"> <br><br>

                Gender<br>
                <input type="radio" name="gender" value="Male" <?php if($gender == "Male"){ echo "checked"; } ?>> Male
                <input type="radio" name="gender" value="Female" <?php if($gender == "Female"){ echo "checked"; } ?>> Female
                <input type="radio" name="gender" value="Other" <?php if($gender == "Other"){ echo "checked"; } ?>> Other <br><br>

                Date of Birth<br>
                <input type="text" name="dob" value="<?php echo $dob; ?>"> <br><br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
        <hr>
        <p>Copyright &copy; 2017</p>
</body>
</html>
