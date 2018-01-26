<?php
    $age = 18;
    // $old_enough is set to be FALSE by default so we don't have to write else {$old_enough = FALSE;} after if.
    $old_enough = FALSE;
    if($age >= 18) {
        $old_enough = TRUE;
    }
    if($old_enough === TRUE) {
        echo 'Old enough.';
    } else {
        echo 'Not old enough.';
    }

    // Hey, this is quite long isn't it? Let's shorten these to one line. I introduce you... Ternary Operators!
    
// Example A
    // How do Ternary Operators work? $value = (2 ? TRUE : FALSE) simple as that

    // <###> most basic usage <###>
        // $var = 5;
        // $var_is_greater_than_two = ($var > 2 ? true : false); // returns true

    $valueA = (2 ? '<br>TRUE' : '<br>FALSE'); //We set the value to be 2, if $value =
    echo $valueA;
// Example B
    // In this example we tried echo but it gave a parse error, replace it by print and it works (echo 0 - 1 print)
    $valueB = ($valueA ? print '<br>valueB is equal to valueA' : print '<br>valueB is equal to valueA');
// Example C
    $answer = 7;
    $test = ($answer == 9 ? print '<br>Good answer, it was 7 indeed.' : print '<br>Bad answer, try to be more careful next time.');
    echo '<br>';
    // Let's go back to the very first example and let's try write it all in ternary operators

    $userAge = 11;
    $mature_enough = ($userAge >= 18) ? TRUE : FALSE; 
    echo $access_granted = ($mature_enough === TRUE) ? 'Welcome!' : 'You are not old enough to browse this website.';
    echo '<br>';

    // This code is correct but it has unecessary lines, let's optimize it more!
    $userAge2 = 11;
    echo ($userAge2 >= 18) ? 'Welcome!' : 'You are not old enough to browse this website dude. Come back later, like way later.';
    // Nice! 2 lines instead of 3, instead of 10
?>