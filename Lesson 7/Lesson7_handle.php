<?php
    //FIND FACTOR OF A NUMBER
    // if (isset($_POST['submit'])) {
    //     $a = $_POST['a'];
    //     $str = '';
    //     for ($i = 1; $i <= $a; $i++) {
    //         if ($a % $i === 0) {
    //             $str .= $i . ', ';
    //         }
    //     }
    //     echo rtrim("The factors of $a are $str",', ');
    // } else {
    //     echo '<script>
    //         alert("You have not fill in the form yet!");
    //         window.location.href = "Lesson7_practise.php";
    //     </script>';
    // }

    
    if (isset($_POST['submit'])) {
        $numbers = $_POST['numbers'];
        $arr = explode(',', $numbers);
        echo "The sum of all the numbers in the array is: " . array_sum($arr);
    } else {
        echo '<script>
            alert("You have not fill in the form yet!");
            window.location.href = "Lesson7_practise.php";
        </script>';
    }