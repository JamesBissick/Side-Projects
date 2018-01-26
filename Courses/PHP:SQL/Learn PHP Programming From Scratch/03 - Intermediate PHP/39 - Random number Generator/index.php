<?php
    $randomNumberA = mt_rand();
    echo $randomNumberA;
    echo '<br>';
    // Let's take this idea but put in parameters
    $randomNumberB = mt_rand(1, 6);
    echo 'You\'ve rolled a ' . $randomNumberB;
?>