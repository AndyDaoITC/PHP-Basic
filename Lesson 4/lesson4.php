<?php
    // $arr = [1,2,5,6,7,2,4];
    // $total = 0;
    // foreach ($arr as $value) {
    //     $total += $value;
    // }
    // echo "The sum of all of the digits in the array is $total";


    // function sayHello() {
    //     echo 'Hello World!';
    // }
    // sayHello();
    
    // echo '<br>';
    
    // $a = 10;
    // $b = 15;
    // function sum($a, $b) {
    //     echo $a + $b;
    // }
    // sum($a,$b);
    // echo '<br>';

    // function say() {
    //     return 'Hello Teacher';
    // }
    // echo say();
    // echo '<br>';

    // function minus($a, $b) {
    //     return $a - $b;
    // }
    // echo minus($a, $b);


    // $a = -11;
    // function checkOddEven($a) {
    //     if ($a % 2 == 0) {
    //         echo "$a is an even number";
    //     } else {
    //         echo "$a is an odd number";
    //     }
    // }
    
    // checkOddEven($a);


    // $a = 69420;
    // function factor($a){
    //     $str = '';
    //     for ($i = 1; $i <= $a; $i++) {
    //         if ($a % $i === 0) {
    //             $str .= $i . ', ';
    //         }
    //     }
    //     echo rtrim("The factors of $a are $str",', ');
    // }

    // factor($a);


    $n = 4;
    function add($n) {
        $total = 0;
        for ($i = 1; $i <= $n; $i++) {
            $total += $i;
        }
        echo "The total of all the numbers from 1 to $n is $total";
    }
    add($n);