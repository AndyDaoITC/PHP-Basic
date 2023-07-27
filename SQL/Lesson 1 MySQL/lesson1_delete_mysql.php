<?php
    include 'inc/connect.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = {$id}";
    $status = mysqli_query($connect, $sql);
    if ($status) {
        echo '<script>
            window.location.href = "lesson1_mysql.php";
            alert("Delete Successfully");
        </script>';
    } else {
        echo '<script>
            alert("Something Went Wrong!");
        </script>';
    }