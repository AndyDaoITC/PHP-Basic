<?php
    $users = json_decode(file_get_contents('Lesson11.json'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 11 Data</title>
    <?php include '../Lesson 10 Exercise/inc/lib.php' ?>
</head>
<body>
    <div class="container mt-3">
        <table class="table table-bordered">
            <thread>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thread>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->name ?></td>
                            <td><?= $user->email ?></td>
                            <td><?= $user->phone ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </body>
</html>