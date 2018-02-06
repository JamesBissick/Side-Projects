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
    var_dump($a != $b) . '<br>'; // Is $a not equal to $b
    var_dump($a == $b) . '<br>'; // Is $a equal to $b?
    var_dump($a === $b) . '<br>'; // Is $a strictly equal to $b, in type and in value

    // Incrementation & Decrementation
    $varX = 0;
    echo $varX++;
    echo '<br>';

    // Advanced Operators
    $varA = 10;
    $varB = 50;
    var_dump($varA > 20 and $varB > 20); // return false
    var_dump($varA > 2 xor $varB > 100); // xor wants only one of these statement to be true, if both are false: false, if both true: false

    // Concatenation
    $firstname = 'James ';
    $lastname  = 'Harrys';
    $fullname  = $firstname . $lastname . '<br>';
    $firstname .= $lastname . '<br>'; // Same as above, it concatenates $firstname and $lastname together
    echo $fullname;
    echo $firstname;
?>