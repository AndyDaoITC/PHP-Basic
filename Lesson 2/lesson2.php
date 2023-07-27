<?php
    // $arr1 = array('a','b','c',1,2,3,true,false);
    // $arr2 = ['a','b','c',1,2,3,true,false];
    // echo $arr1[5];
    // echo '<br>';
    // echo $arr2[5];
    // echo '<br>';
    // echo '<pre>';
    // print_r($arr1);
    // echo '</pre>';
    // echo 'So luong phan tu co trong mang la: ' . count($arr1);

    // $user = [
    //     'name' => 'Andy Dao',
    //     'age' => 12,
    //     'gender' => 'Male',
    //     'job' => 'No Job',
    // ];
    // echo '<br>';
    // echo "My name is " . $user['name'] . ", I'm " . $user['age'] . " years old!";
    // echo '<pre>';
    // print_r($user);
    // echo '</pre>';
    // $arr3 = [
    //     ['a','b','c'],
    //     [1,2,3],
    // ];
    // echo '<br>';
    // echo $arr3[0][1];

    // // Sort
    // $arr4 = [5,4,2,1,0,9,8];
    // rsort($arr4);
    // echo '<pre>';
    // print_r($arr4);
    // echo '</pre>';
    // $arr5 = [
    //     'a' => 23,
    //     'c' => 14,
    //     'b' => 10,
    // ];
    // asort($arr5);
    // echo '<pre>';
    // print_r($arr5);
    // echo '</pre>';

    $numbers = [1,4,5,6,2,7,8,10,11,12];
    $sum = 0;
    echo "Even numbers are: <br>";
    foreach ($numbers as $key=>$value) {
        if ($value % 2 == 0)
            echo "$value ";
        $sum += $value;
    }
    echo '<br>';
    echo 'The sum of all the numbers is:';
    echo '<br>';
    echo $sum;