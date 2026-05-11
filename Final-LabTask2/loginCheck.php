<?php
    session_start();

    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }

    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            echo "null username or password! <a href='login.php'>Go Back</a>";
        }else{
            $valid_user = false;

            foreach($_SESSION['users'] as $user){
                if($user['username'] == $username && $user['password'] == $password){
                    $valid_user = true;
                }
            }

            if($valid_user){
                $_SESSION['status'] = true;
                $_SESSION['username'] = $username;

                if(isset($_REQUEST['remember'])){
                    setcookie('username', $username, time()+3000, '/');
                }else{
                    setcookie('username', '', time()-3000, '/');
                }

                header('location: dashboard.php');
            }else{
                echo "invalid user! <a href='login.php'>Go Back</a>";
            }
        }
    }else{
        header('location: login.php');
    }
?>
