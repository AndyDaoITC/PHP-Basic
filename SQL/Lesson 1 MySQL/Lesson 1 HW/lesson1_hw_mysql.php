<?php
    include 'inc/connect.php';
    $sql = 'SELECT * FROM students';
    $result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 HW</title>
    <?php include 'inc/lib.php' ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" type="text/css">
</head>
<body>
    <?php include 'inc/header.php' ?>
    <div class="container">
        <h2 class="text-center mt-4">Students</h2>
        <a href="lesson1_hw_add_mysql.php" class="btn btn-primary mt-3 mb-3">Add Student</a>
        <table class="table table-bordered table-hover" id="studentTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Nơi sinh</th>
                    <th>Địa chỉ</th>
                    <th>Quận Huyện</th>
                    <th>Học bổng</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($student = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $student['MaSV'] ?></td>
                            <td><?= $student['HoSV'] ?></td>
                            <td><?= $student['TenSV'] ?></td>
                            <td><?= $student['GioiTinh'] ?></td>
                            <td><?= date('d/m/Y', strtotime($student['NgaySinh'])) ?></td>
                            <td><?= $student['NoiSinh'] ?></td>
                            <td><?= $student['DiaChi'] ?></td>
                            <td><?= $student['Quan'] ?></td>
                            <td><?= $student['HocBong'] ?></td>
                            <td>
                                <a href="lesson1_hw_delete_mysql.php?id=<?= $student['MaSV'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this student?');">
                                    Delete
                                </a>
                                <a href="lesson1_hw_edit_mysql.php?id=<?= $student['MaSV'] ?>" class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="10">No Data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $('#studentTable').DataTable();
    </script>
</body>
</html>
