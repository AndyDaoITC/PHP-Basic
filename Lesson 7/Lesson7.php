<?php
    $a = 5;
    $b = 3;

    function sum() {
        return $GLOBALS['a'] + $GLOBALS['b'];
    }

    echo sum();