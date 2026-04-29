<?php
    // Model: handles all product-related database queries

    function getAllProducts($conn){
        $result   = mysqli_query($conn, "SELECT * FROM products");
        $products = [];
        while($row = mysqli_fetch_assoc($result)){
            $products[] = $row;
        }
        return $products;
    }

    function getProductById($conn, $id){
        $id     = mysqli_real_escape_string($conn, $id);
        $result = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
        return mysqli_fetch_assoc($result);
    }

    function insertProduct($conn, $name, $price){
        $name  = mysqli_real_escape_string($conn, $name);
        $price = mysqli_real_escape_string($conn, $price);
        mysqli_query($conn, "INSERT INTO products (name, price) VALUES ('$name', '$price')");
    }

    function updateProduct($conn, $id, $name, $price){
        $id    = mysqli_real_escape_string($conn, $id);
        $name  = mysqli_real_escape_string($conn, $name);
        $price = mysqli_real_escape_string($conn, $price);
        mysqli_query($conn, "UPDATE products SET name = '$name', price = '$price' WHERE id = '$id'");
    }

    function deleteProduct($conn, $id){
        $id = mysqli_real_escape_string($conn, $id);
        mysqli_query($conn, "DELETE FROM products WHERE id = '$id'");
    }
?>
