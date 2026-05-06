<?php
    function loginAdmin($conn, $username, $password){
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        $result = mysqli_query($conn, "SELECT * FROM admins WHERE username = '$username' AND password = '$password'");
        if(mysqli_num_rows($result) == 1){
            return true;
        }else{
            return false;
        }
    }

    function getAllEmployees($conn){
        $result    = mysqli_query($conn, "SELECT * FROM employees ORDER BY id DESC");
        $employees = [];

        while($row = mysqli_fetch_assoc($result)){
            $employees[] = $row;
        }

        return $employees;
    }

    function getEmployeeById($conn, $id){
        $id     = mysqli_real_escape_string($conn, $id);
        $result = mysqli_query($conn, "SELECT * FROM employees WHERE id = '$id'");
        return mysqli_fetch_assoc($result);
    }

    function insertEmployee($conn, $employee_name, $contact_no, $username, $password){
        $employee_name = mysqli_real_escape_string($conn, $employee_name);
        $contact_no    = mysqli_real_escape_string($conn, $contact_no);
        $username      = mysqli_real_escape_string($conn, $username);
        $password      = mysqli_real_escape_string($conn, $password);

        return mysqli_query($conn, "INSERT INTO employees (employee_name, contact_no, username, password) VALUES ('$employee_name', '$contact_no', '$username', '$password')");
    }

    function updateEmployee($conn, $id, $employee_name, $contact_no, $username, $password){
        $id            = mysqli_real_escape_string($conn, $id);
        $employee_name = mysqli_real_escape_string($conn, $employee_name);
        $contact_no    = mysqli_real_escape_string($conn, $contact_no);
        $username      = mysqli_real_escape_string($conn, $username);
        $password      = mysqli_real_escape_string($conn, $password);

        return mysqli_query($conn, "UPDATE employees SET employee_name = '$employee_name', contact_no = '$contact_no', username = '$username', password = '$password' WHERE id = '$id'");
    }

    function deleteEmployee($conn, $id){
        $id = mysqli_real_escape_string($conn, $id);
        return mysqli_query($conn, "DELETE FROM employees WHERE id = '$id'");
    }

    function searchEmployees($conn, $keyword){
        $keyword = mysqli_real_escape_string($conn, $keyword);
        $result  = mysqli_query($conn, "SELECT * FROM employees WHERE employee_name LIKE '%$keyword%' OR contact_no LIKE '%$keyword%' OR username LIKE '%$keyword%' ORDER BY id DESC");
        $employees = [];

        while($row = mysqli_fetch_assoc($result)){
            $employees[] = $row;
        }

        return $employees;
    }
?>
