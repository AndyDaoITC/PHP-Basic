<?php
    $n = $_POST['n'];
    function factor($n){
        $total = 0;
        for ($i = 1; $i <= $n; $i++) {
            $total += $i;
        }
        return $total;
    }
    $sum = factor($n);
    $result = "The total of all the numbers from 1 to $n is $sum";

    echo json_encode([
        'status' => true,
        'data' => $result
    ]);