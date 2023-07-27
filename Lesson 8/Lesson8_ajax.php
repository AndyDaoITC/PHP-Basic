<?php
    $name = $_POST['fullName'];
    $result = "My name is $name";

    echo json_encode([
        'status' => true,
        'data' => $result
    ]);