<?php
    session_start();

    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['confirm_password'];
        $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
        $dob = $_REQUEST['dob'];

        if($name == "" || $email == "" || $username == "" || $password == "" || $confirm_password == "" || $gender == "" || $dob == ""){
            echo "All fields are required! <a href='registration.php'>Go Back</a>";
        }else if($password != $confirm_password){
            echo "Password and confirm password must be same! <a href='registration.php'>Go Back</a>";
        }else{
            $user_found = false;
            $email_found = false;

            foreach($_SESSION['users'] as $user){
                if($user['username'] == $username){
                    $user_found = true;
                }
                if($user['email'] == $email){
                    $email_found = true;
                }
            }

            if($user_found){
                echo "Username already exists! <a href='registration.php'>Go Back</a>";
            }else if($email_found){
                echo "Email already exists! <a href='registration.php'>Go Back</a>";
            }else{
                $user = [
                    'name' => $name,
                    'email' => $email,
                    'username' => $username,
                    'password' => $password,
                    'gender' => $gender,
                    'dob' => $dob,
                    'picture' => ''
                ];

                $_SESSION['users'][] = $user;
                header('location: login.php');
            }
        }
    }else{
        header('location: registration.php');
    }
?>
