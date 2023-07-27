<?php
    include 'inc/connect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE MaSV = '{$id}'";
    $result = mysqli_query($connect, $sql);
    $student = mysqli_fetch_assoc($result);
    if (isset($_POST['submit'])) { 
        $hosv = $_POST['surname'];
        $tensv = $_POST['name'];
        $gioitinh = $_POST['gender'];
        $ngaysinh = $_POST['birthday'];
        $noisinh = $_POST['birthplace'];
        $diachi = $_POST['address'];
        $quan = $_POST['district'];
        $hocbong = $_POST['scholarship'];
        $sql = "UPDATE students SET HoSV = '{$hosv}', TenSV = '{$tensv}', GioiTinh = '{$gioitinh}', NgaySinh = '{$ngaysinh}', NoiSinh = '{$noisinh}', DiaChi = '{$diachi}', Quan = '{$quan}', HocBong = {$hocbong} WHERE MaSV = '{$id}'";
        $status = mysqli_query($connect, $sql);
        if ($status) {
            echo '<script>
                window.location.href = "lesson1_hw_mysql.php";
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
    <title>Edit Student</title>
    <?php include 'inc/lib.php' ?>
</head>
<body>
    <?php include 'inc/header.php' ?>   
    <div class="container">
        <h2 class="text-center">Edit Student</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label>Họ SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's Surname" name="surname" value="<?= $student['HoSV'] ?>" required />
            </div>
            <div class="form-group">
                <label>Tên SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's Name" name="name" value="<?= $student['TenSV'] ?>" required />
            </div>
            <div class="form-group">
                <label>Giới Tính SV:</label>
                <select class="form-control" name="gender" value="<?= $student['GioiTinh'] ?>" required>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label>Ngày Sinh SV:</label>
                <input type="date" class="form-control" name="birthday" value="<?= $student['NgaySinh'] ?>" required />
            </div>
            <div class="form-group">
                <label>Nơi Sinh SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's Birth Place" name="birthplace" value="<?= $student['NoiSinh'] ?>" required />
            </div>
            <div class="form-group">
                <label>Địa Chỉ SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's Address" name="address" value="<?= $student['DiaChi'] ?>" required />
            </div>
            <div class="form-group">
                <label>Quận Huyện SV:</label>
                <input type="text" class="form-control" placeholder="Enter Student's District" name="district" value="<?= $student['Quan'] ?>" required />
            </div>
            <div class="form-group">
                <label>Học Bổng SV:</label>
                <input type="number" class="form-control" placeholder="Enter Student's Scholarship" name="scholarship" value="<?= $student['HocBong'] ?>" required />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>