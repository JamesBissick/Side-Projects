<?php
    $num = 1;
    /* while($num != 1){ //This condition will return false so it won't run
        echo 'This';
    } */
    do {    // We use do if we want to always run a block of code
        echo 'That';
        $num++; // Don't forget to increment or the value will stay 1 and you'll get an infinite loop
    } while($num <= 10);
?>