<?php
    session_start();

    if(!isset($_SESSION['status'])){
        header('location: login.php');
    }

    $name = "";
    $email = "";
    $gender = "";
    $dob = "";
    $picture = "";

    foreach($_SESSION['users'] as $user){
        if($user['username'] == $_SESSION['username']){
            $name = $user['name'];
            $email = $user['email'];
            $gender = $user['gender'];
            $dob = $user['dob'];
            $picture = $user['picture'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Profile</title>
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

        <fieldset>
            <legend><b>PROFILE</b></legend>
            <?php if($picture != ""){ ?>
                <img src="<?php echo $picture; ?>" width="100" height="100" alt="Profile Picture">
                <br><br>
            <?php } ?>
            Name: <?php echo $name; ?> <br>
            Email: <?php echo $email; ?> <br>
            Gender: <?php echo $gender; ?> <br>
            Date of Birth: <?php echo $dob; ?> <br><br>
            <a href="editProfile.php">Edit Profile</a>
        </fieldset>
        <hr>
        <p>Copyright &copy; 2017</p>
</body>
</html>
