<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'student';

    //Create Connection
    $connect = mysqli_connect($servername, $username, $password);
    mysqli_select_db($connect, $database);

    //Check Connection
    if(!$connect) {
        die('Connection failed: ' . mysqli_connect());
    }