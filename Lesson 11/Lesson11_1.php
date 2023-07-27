<?php
    $users = json_decode(file_get_contents('Lesson11.json'));
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $arr = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ];

        if (empty($users)) {
            file_put_contents('Lesson11.json', json_encode([$arr], JSON_UNESCAPED_UNICODE));
        } else {
            array_push($users, $arr);
            file_put_contents('Lesson11.json', json_encode($users, JSON_UNESCAPED_UNICODE));
        }

        echo "<script>
            alert('Successfully Submit!')
            window.back.history();
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 11</title>
    <?php include '../Lesson 10 Exercise/inc/lib.php' ?>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label>Fullname:</label>
                <input type="text" name="name" class="form-control" required />
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required />
            </div>
            <div>
                <label>Phone Number:</label>
                <input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" required />
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </body>
</html>