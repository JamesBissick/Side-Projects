<?php
// 1. Using the mt_rand() random number-generator function

function roll () {
    return mt_rand(1,6);
}

echo roll();

/* 
//Change the type of dice if need be

function roll ($sides) {
    return mt_rand(1,$sides);
}
 
echo roll(6);   // roll a six-sided die
echo roll(10);  // roll a ten-sided die
echo roll(20);  // roll a twenty-sided die
*/

?>