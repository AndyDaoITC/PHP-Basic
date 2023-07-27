<?php
    if (isset($_POST['submit'])) {
        $a = $_POST['a'];
        if ($a % 2 === 0) {
            echo "$a is an even number";
        } else {
            echo "$a is an odd number";
        }
    } else {
        echo '<script>
            alert("You have not fill in the form yet!");
            window.location.href = "Lesson6.php";
        </script>';
    }