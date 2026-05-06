<?php
    require_once '../model/db.php';
    require_once '../model/employeeModel.php';

    $action = "";
    if(isset($_REQUEST['action'])){
        $action = $_REQUEST['action'];
    }

    if($action == "login"){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            echo "<p>Username and password can not be empty. <a href='../view/login.php'>Go Back</a></p>";
        }else{
            $status = loginAdmin($conn, $username, $password);

            if($status){
                $_SESSION['admin_logged_in'] = true;
                header("Location: ../view/home.php");
                exit();
            }else{
                echo "<p>Invalid username or password. <a href='../view/login.php'>Try Again</a></p>";
            }
        }

    }else if($action == "register"){

        if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
            header("Location: ../view/login.php");
            exit();
        }

        $employee_name = $_POST['employee_name'];
        $contact_no    = $_POST['contact_no'];
        $username      = $_POST['username'];
        $password      = $_POST['password'];

        if($employee_name == "" || $contact_no == "" || $username == "" || $password == ""){
            echo "<p>All fields are required. <a href='../view/register.php'>Go Back</a></p>";
        }else{
            $status = insertEmployee($conn, $employee_name, $contact_no, $username, $password);

            if($status){
                header("Location: ../view/home.php");
                exit();
            }else{
                echo "<p>Employee username already exists or database error. <a href='../view/register.php'>Go Back</a></p>";
            }
        }

    }else if($action == "update"){

        if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
            header("Location: ../view/login.php");
            exit();
        }

        $id            = $_POST['id'];
        $employee_name = $_POST['employee_name'];
        $contact_no    = $_POST['contact_no'];
        $username      = $_POST['username'];
        $password      = $_POST['password'];

        if($id == "" || $employee_name == "" || $contact_no == "" || $username == "" || $password == ""){
            echo "<p>All fields are required. <a href='../view/home.php'>Go Back</a></p>";
        }else{
            $status = updateEmployee($conn, $id, $employee_name, $contact_no, $username, $password);

            if($status){
                header("Location: ../view/home.php");
                exit();
            }else{
                echo "<p>Employee could not be updated. <a href='../view/home.php'>Go Back</a></p>";
            }
        }

    }else if($action == "delete"){

        if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
            header("Location: ../view/login.php");
            exit();
        }

        if(isset($_GET['id'])){
            deleteEmployee($conn, $_GET['id']);
        }

        header("Location: ../view/home.php");
        exit();

    }else if($action == "search"){

        header("Content-Type: application/json");

        if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
            echo json_encode([]);
            exit();
        }

        $keyword = "";
        if(isset($_POST['employee'])){
            $employee = json_decode($_POST['employee'], true);
            if(isset($employee['keyword'])){
                $keyword = $employee['keyword'];
            }
        }

        $employees = searchEmployees($conn, $keyword);
        echo json_encode($employees);
        exit();

    }else if($action == "logout"){

        session_destroy();
        header("Location: ../view/login.php");
        exit();

    }else{

        header("Location: ../view/login.php");
        exit();

    }
?>
