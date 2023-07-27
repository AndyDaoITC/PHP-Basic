<?php
    echo "<h1>PHP</h1>";
    // echo "<h3>Games I like to play:</h3>";
    // echo "- Roblox<br>";
    // echo "- Minecraft<br>";
    // $a = 10;
    // $b = 5;
    // $perimeter = $a + $b + $a + $b;
    // $area = $a * $b;
    // echo "The perimeter of the square is <span style='color:blue';>$perimeter</span>";
    // echo "<br>";
    // echo "The area of the square is <span style='color:red';>$area</span>";

    // $a = 13243;
    // if ($a % 2 == 0) {
    //     echo "Even";
    // } else {
    //     echo "Odd";
    // }

    $a = 50000000;
    if ($a > 5000000 && $a <= 10000000) {
        echo ($a * 0.95);
    } elseif ($a > 10000000) {
        echo ($a * 0.90);
    }