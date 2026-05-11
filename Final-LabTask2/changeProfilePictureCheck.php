<?php
    session_start();

    if(!isset($_SESSION['status'])){
        header('location: login.php');
    }

    if(isset($_REQUEST['submit'])){
        $picture = $_REQUEST['picture'];

        if($picture == ""){
            echo "Picture link is required! <a href='changeProfilePicture.php'>Go Back</a>";
        }else{
            for($i=0; $i<count($_SESSION['users']); $i++){
                if($_SESSION['users'][$i]['username'] == $_SESSION['username']){
                    $_SESSION['users'][$i]['picture'] = $picture;
                }
            }

            header('location: viewProfile.php');
        }
    }else{
        header('location: changeProfilePicture.php');
    }
?>
