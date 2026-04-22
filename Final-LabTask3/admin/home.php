<?php
    require_once '../config.php';

    if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] != true){
        header("Location: login.html");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Home</title>
</head>
<body>

    <h2>Welcome, Admin!</h2>
    <hr>
    <a href="insert.html">Insert New Product</a><br><br>
    <a href="logout.php">Logout</a>
    <hr>

    <h3>Product List</h3>

    <?php if(!empty($_SESSION['products'])){ ?>

        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price (BDT)</th>
                <th>Action</th>
            </tr>

            <?php foreach($_SESSION['products'] as $product){ ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $product['id']; ?>">Update</a>
                        &nbsp;|&nbsp;
                        <a href="delete-handler.php?id=<?php echo $product['id']; ?>"
                           onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>

        </table>

    <?php } else { ?>

        <p>No products available. Please insert a product.</p>

    <?php } ?>

</body>
</html>
