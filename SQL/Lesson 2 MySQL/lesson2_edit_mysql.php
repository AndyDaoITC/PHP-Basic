<?php
    define('ROOT_PATH', realpath(__DIR__));
    $pathFormat = str_replace('\\', '/', ROOT_PATH);
    include 'inc/connect.php';
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($connect, $sql);
    $id = $_GET['id'];
    $product = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM products WHERE id = " . $id));
    if (isset($_POST['submit'])) { 
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $file = $_FILES['image'];
        $imgName = date('dmYhis') . '_' . $file['name'];
        $tmpName = $file['tmp_name'];
        if (move_uploaded_file($tmpName, $pathFormat . '/uploads/' . $imgName)) {
            $src = "uploads/$imgName";
        }
        if (!isset($src)) {
            $sql = "UPDATE products SET name = '{$name}', price = {$price}, qty = {$qty}, description = '{$description}', category_id = {$category} WHERE id = {$id}";
        } else {
            $sql = "UPDATE products SET name = '{$name}', price = {$price}, qty = {$qty}, description = '{$description}', category_id = {$category}, image = '{$src}' WHERE id = {$id}";
        }
        $status = mysqli_query($connect, $sql);
        if ($status) {
            echo '<script>
                window.location.href = "lesson2_mysql.php";
                alert("Update Successfully");
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
    <title>Edit Product</title>
    <?php include 'inc/lib.php' ?>
</head>
<body>
    <?php include 'inc/header.php' ?>   
    <div class="container">
        <h2 class="text-center">Edit Product</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Product's Name" name="name" value="<?= $product['name'] ?>" required />
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" placeholder="Enter Product's Price" name="price" min="1" value="<?= $product['price'] ?>" required />
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="Enter Product's Quantity" name="qty" value="<?= $product['qty'] ?>" required />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" cols="10" rows="3" placeholder="Enter Product's Description" required><?= $product['description'] ?></textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category" class="form-control">
                    <?php while ($category = mysqli_fetch_assoc($result)): ?>
                        <option value="<?= $category['id'] ?>" <?= $product['category_id'] == $category['id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" accept=".png,.gif,.jpg,.jpeg"/>
            </div>
            <div class="form-group">
                <a href="<?= $product['image'] ?>" target="_blank">
                    <img class="mt-3" src="<?= $product['image'] ?>" width="200" />
                </a>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</body>
</html>