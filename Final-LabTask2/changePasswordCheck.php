<?php
    session_start();

    if(!isset($_SESSION['status'])){
        header('location: login.php');
    }

    if(isset($_REQUEST['submit'])){
        $current_password = $_REQUEST['current_password'];
        $new_password = $_REQUEST['new_password'];
        $retype_password = $_REQUEST['retype_password'];
        $old_password = "";

        foreach($_SESSION['users'] as $user){
            if($user['username'] == $_SESSION['username']){
                $old_password = $user['password'];
            }
        }

        if($current_password == "" || $new_password == "" || $retype_password == ""){
            echo "All fields are required! <a href='changePassword.php'>Go Back</a>";
        }else if($old_password != $current_password){
            echo "Current password is wrong! <a href='changePassword.php'>Go Back</a>";
        }else if($new_password != $retype_password){
            echo "New password and retype password must be same! <a href='changePassword.php'>Go Back</a>";
        }else if($current_password == $new_password){
            echo "New password should not be same as current password! <a href='changePassword.php'>Go Back</a>";
        }else{
            for($i=0; $i<count($_SESSION['users']); $i++){
                if($_SESSION['users'][$i]['username'] == $_SESSION['username']){
                    $_SESSION['users'][$i]['password'] = $new_password;
                }
            }

            header('location: dashboard.php');
        }
    }else{
        header('location: changePassword.php');
    }
?>
