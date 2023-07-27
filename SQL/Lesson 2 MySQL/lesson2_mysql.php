<?php
    include 'inc/connect.php';
    $sql = 'SELECT a.*, b.name category_name FROM products a JOIN categories b ON a.category_id = b.id';
    $result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 PHP MySQL</title>
    <?php include 'inc/lib.php' ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" type="text/css">
</head>
<body>
    <?php include 'inc/header.php' ?>
    <div class="container">
        <h2 class="text-center">Products</h2>
        <a href="lesson2_add_mysql.php" class="btn btn-primary mt-3 mb-3">Add Product</a>
        <table class="table table-bordered table-hover" id="productTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($product = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><img src="<?= $product['image'] ?>" width="100"></td>
                            <td><?= $product['name'] ?></td>
                            <td><?= number_format($product['price'], -3, ',', ',') ?> VND</td>
                            <td><?= $product['qty'] ?></td>
                            <td><?= $product['description'] ?></td>
                            <td><?= $product['category_name'] ?></td>
                            <td>
                                <a href="lesson2_delete_mysql.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');">
                                    Delete
                                </a>
                                <a href="lesson2_edit_mysql.php?id=<?= $product['id'] ?>" class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                                <a href="lesson2_view.php?id=<?= $product['id'] ?>" class="btn btn-success btn-sm">
                                    View
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">No Data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $('#productTable').DataTable();
    </script>
</body>
</html>