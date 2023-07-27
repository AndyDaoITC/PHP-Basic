<?php
    // $number = 9876543210;
    // function reverseNumber($number) {
    //     $str = '';
    //     $arr = str_split($number);
    //     foreach (array_reverse($arr) as $item) {
    //         $str .= $item;
    //     }

    //     echo $str;
    // }
    // reverseNumber($number);


    $n = 33;
    function checkNumber($n) {
        $total = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0) {
                $total += $i;
            }
        }

        if ($total == $n) {
            echo "$n is a perfect number";
        } else {
            echo "$n is not a perfect number";
        }
    }
    checkNumber($n);