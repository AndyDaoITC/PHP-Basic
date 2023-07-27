<?php
   include 'inc/connect.php';
   $id = $_GET['id'];
   $sql = 'SELECT a.*, b.name category_name FROM products a JOIN categories b ON a.category_id = b.id WHERE a.id = ' . $id;
   $result = mysqli_query($connect, $sql);
   $product = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['name'] ?></title>
    <?php include 'inc/lib.php'; ?>
</head>
<body>
   <?php include 'inc/header.php'; ?>
   <div class="container">
      <h2 class="text-center mt-2 mb-2"><?= $product['name'] ?></h2>
      <table class="table table-bordered">
         <tr>
            <th>ID</th>
            <td><?= $product['id'] ?></td>
         </tr>
         <tr>
            <th>Image</th>
            <td><img src="<?= $product['image'] ?>" width="100"></td>
         </tr>
         <tr>
            <th>Name</th>
            <td><?= $product['name'] ?></td>
         </tr>
         <tr>
            <th>Price</th>
            <td><?= number_format($product['price'], -3, ',', ',') ?> VND</td>
         </tr>
         <tr>
            <th>Quantity</th>
            <td><?= $product['qty'] ?></td>
         </tr>

         <tr>
            <th>Description</th>
            <td><?= $product['description'] ?></td>
         </tr>
         <tr>
            <th>Category Name</th>
            <td><?= $product['category_name'] ?></td>
         </tr>
      </table>
    </div>
</body>
</html>