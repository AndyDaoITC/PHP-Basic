<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $sum = $a + $b;
    $result = "The total of $a and $b is $sum";

    echo json_encode([
        'status' => true,
        'data' => $result
    ]);