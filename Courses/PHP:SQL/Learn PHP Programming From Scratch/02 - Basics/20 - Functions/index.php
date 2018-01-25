<?php
    // Function are a cleaner way to code and a great way to gain time without having to repeat lines of codes we need multiple times , over and over again
    // Also can speed up your code
    function name1(){
        echo 'James ';
    } // At this point, you might check it out in the browser and expect it to be echoed out, 
      // come again, you have to call the function for it to work, like so:
    name1();

    // What if we want to be able to call a name inside name()? We need 
    function name2($name){ //Take an argument inside the function instead of it being blank, create a variable inside
        echo $name; // Then echo out that variable
    }
    name2('Harrys');
echo '<br>';
    //Let's introduce a new keyword, 'return'. Return allows you to return a value, but it won't be echoed out.
    function name3($fullname){
        return 'My name is ' . $fullname . '.';

    }
    /* $returnValue = name3('Jean Claude Van Damme');
    echo $returnValue; */ 
    // or, even simpler just echo the function directly
    echo name3('Jean Claude Van Damme');
echo '<br>';
    //What if, this time, we want to add another argument to our function?
    function infoUser($fullname, $age){
        return 'My name is ' . $fullname . ' and I\'m ' . $age . '.';
    }
    echo infoUser('Patti Smith', 24);
echo '<br>';
    //Same example but with numbers
    function add($num1, $num2){
        $result = $num1 + $num2;
        return $result;
    }
    echo add(10, 25);

?>