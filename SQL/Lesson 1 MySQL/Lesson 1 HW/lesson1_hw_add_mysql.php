<?php
    include 'inc/connect.php';
    if (isset($_POST['submit'])) { 
        $masv = $_POST['id'];
        $hosv = $_POST['surname'];
        $tensv = $_POST['name'];
        $gioitinh = $_POST['gender'];
        $ngaysinh = $_POST['birthday'];
        $noisinh = $_POST['birthplace'];
        $diachi = $_POST['address'];
        $quan = $_POST['district'];
        $hocbong = $_POST['scholarship'];
        $sql = "INSERT INTO students (MaSV, HoSV, TenSV, GioiTinh, NgaySinh, NoiSinh, DiaChi, Quan, HocBong) VALUES ('{$masv}', '{$hosv}', '{$tensv}', '{$gioitinh}', '{$ngaysinh}', '{$noisinh}', '{$diachi}', '{$quan}', {$hocbong})";
        echo $sql;
        $status = mysqli_query($connect, $sql);
        if ($status) {
            echo '<script>
                window.location.href = "lesson1_hw_mysql.php";
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
    <title>Add Student</title>
    <?php include 'inc/lib.php' ?>
</head>
<body>
    <?php include 'inc/header.php' ?>   
    <div class="container">
        <h2 class="text-center">Add Student</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label>Mã SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's ID" name="id" required />
            </div>
            <div class="form-group">
                <label>Họ SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's Surname" name="surname" required />
            </div>
            <div class="form-group">
                <label>Tên SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's Name" name="name" required />
            </div>
            <div class="form-group">
                <label>Giới Tính SV:</label>
                <select class="form-control" name="gender" required>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label>Ngày Sinh SV:</label>
                <input type="date" class="form-control" name="birthday" required />
            </div>
            <div class="form-group">
                <label>Nơi Sinh SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's Birth Place" name="birthplace" required />
            </div>
            <div class="form-group">
                <label>Địa Chỉ SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's Address" name="address" required />
            </div>
            <div class="form-group">
                <label>Quận Huyện SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's District" name="district" required />
            </div>
            <div class="form-group">
                <label>Học Bổng SV:</label>
                <input type="number" class="form-control" placeholder="Enter Student's Scholarship" name="scholarship" required />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>