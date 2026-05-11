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
    <title>Dashboard</title>
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

        <h1>Welcome <?php echo $name; ?></h1>
        <hr>
        <p>Copyright &copy; 2017</p>
</body>
</html>
