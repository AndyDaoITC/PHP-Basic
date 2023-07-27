<?php
    $n = $_POST['n'];
    function factor($n){
        $str = '';
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i === 0) {
                $str .= $i . ', ';
            }
        }
        return rtrim("$str",', ');;
    }
    $factor = factor($n);
    $result = "The factors of $n are: $factor";

    echo json_encode([
        'status' => true,
        'data' => $result
    ]);