<?php
    define('ROOT_PATH', realpath(__DIR__));
    $pathFormat = str_replace('\\', '/', ROOT_PATH);
    if (isset($_POST['submit'])) {
        $file = $_FILES['image'];
        $name = date('dmYHis') . '_' . $file['name'];
        $tmpName = $file['tmp_name'];
        if (move_uploaded_file($tmpName, $pathFormat . '/uploads/' . $name)) {
            $src = "uploads/$name";
        }
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
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" accept=".png,.gif,.jpg,.jpeg" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-3">Upload</button>
        </form>
        <?php if (isset($src)): ?>
            <a href="<?= $src ?>" target="_blank"></a>
                <img class="mt-3" src="<?= $src ?>" width="200" />
            </a>
            <div>
                <a href="<?= $src ?>" class="btn btn-success mt-3" download>Download</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>