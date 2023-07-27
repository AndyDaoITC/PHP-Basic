<?php
    include 'inc/connect.php';
    if (isset($_POST['submit'])) { 
        $name = $_POST['name'];
        $quantity = $_POST['qty'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $sql = "INSERT INTO products (name, qty, price, description) VALUES ('{$name}', {$quantity}, {$price}, '{$description}')";
        $status = mysqli_query($connect, $sql);
        if ($status) {
            echo '<script>
                window.location.href = "lesson1_mysql.php";
                alert("Add Successfully");
            </script>';
        } else {
            echo '<script>
                alert("Something Went Wrong!");
            </script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <?php include 'inc/lib.php' ?>
</head>
<body>
    <?php include 'inc/header.php' ?>   
    <div class="container">
        <h2 class="text-center">Add Product</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Product's Name" name="name" required />
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="Enter Product's Quantity" name="qty" required />
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" placeholder="Enter Product's Price'" name="price" required />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" cols="10" rows="3" placeholder="Enter Product's Description" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>