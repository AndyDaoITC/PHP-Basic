<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'inc/lib.php' ?>
</head>

<body>
    <?php include 'inc/header.php' ?>
    <!-- Content -->
    <div class="container mt-3 mb-3">
        <h3>Login</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required/>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required/>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Login</button>
        </form>
    </div>
    <?php include 'inc/footer.php' ?>
</body>

</html>