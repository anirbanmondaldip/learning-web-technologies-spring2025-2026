<?php
    session_start();

    if(!isset($_SESSION['status'])){
        header('location: login.php');
    }

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
        $dob = $_REQUEST['dob'];

        if($name == "" || $email == "" || $gender == "" || $dob == ""){
            echo "All fields are required! <a href='editProfile.php'>Go Back</a>";
        }else{
            $email_found = false;

            foreach($_SESSION['users'] as $user){
                if($user['email'] == $email && $user['username'] != $_SESSION['username']){
                    $email_found = true;
                }
            }

            if($email_found){
                echo "Email already exists! <a href='editProfile.php'>Go Back</a>";
            }else{
                for($i=0; $i<count($_SESSION['users']); $i++){
                    if($_SESSION['users'][$i]['username'] == $_SESSION['username']){
                        $_SESSION['users'][$i]['name'] = $name;
                        $_SESSION['users'][$i]['email'] = $email;
                        $_SESSION['users'][$i]['gender'] = $gender;
                        $_SESSION['users'][$i]['dob'] = $dob;
                    }
                }

                header('location: viewProfile.php');
            }
        }
    }else{
        header('location: editProfile.php');
    }
?>
