<?php
    // Basic function
    function add1($num1, $num2){
        $total = $num1 + $num2;
        return $total; // THis is bad practice, just for clarity
    }
    echo add1(1992, 25);
echo '<br>';
    //Now, doing this may be fairly easy, but what if you do not know how many parameters there will be but want to be able to use a fonction anyway?
    function add2(){ // Don't put anything in here
        $total = 0; // Starting point will be zero
        foreach(func_get_args() as $arg){ // This will return an array
            $total += (int)$arg; // Make sure these are numbers with (int)
        }
    // It will loop through the first iteration: 0 + $arg, the second and the third. Basically, it will go through as much arguments we put in the function add2.
        return $total; 
    }
    echo add2(10, 5, 7, 300, 127); // Try to add arguments, you'll see it will keep adding up.
echo '<br>';
    // Another example
    function append($initial){ 
        $result = func_get_arg(0);
        foreach(func_get_args() as $key => $value) {
            if($key >= 1) {
                $result .= ' ' . $value;
            }
        }
        return $result;
    }
    echo append('Jonas', 'Hill' , 'Cooper');
?>