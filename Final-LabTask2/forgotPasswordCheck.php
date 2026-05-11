<?php
    session_start();

    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }

    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];
        $password = "";

        foreach($_SESSION['users'] as $user){
            if($user['email'] == $email){
                $password = $user['password'];
            }
        }

        if($email == ""){
            echo "Email is required! <a href='forgotPassword.php'>Go Back</a>";
        }else if($password == ""){
            echo "Email not found! <a href='forgotPassword.php'>Go Back</a>";
        }else{
            echo "Your password is: ".$password." <a href='login.php'>Login</a>";
        }
    }else{
        header('location: forgotPassword.php');
    }
?>
