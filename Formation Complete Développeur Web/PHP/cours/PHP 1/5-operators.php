<?php
    $x = 3;
    $y = 7;

    // Basic Operators
    echo $x + $y . '<br>';
    echo $x * $y . '<br>';
    echo $y / $x . '<br>';
    echo $y % $x . '<br>';
    echo '<br>';
    
    // Intermediate Operators
    echo $x ** $y . '<br>'; //x^y puissance
    echo $x += $y . '<br>'; // means the same as $x = $x + $y

    // Something else
    $a = 50;
    $b = "50";
    var_dump($a == $b); // Is $a equal to $b?
    var_dump($a === $b); // Is $a strictly equal to $b, in type and in value
?>