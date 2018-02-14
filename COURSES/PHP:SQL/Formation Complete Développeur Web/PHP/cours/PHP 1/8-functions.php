<?php
    // Basic function
    function myFunction1() {
        echo "Hello World";
    }
    myFunction1();
    echo '<br>';

    // Introducing a message in the function
    function myFunction2($message1) {
        echo($message1);
    }
    myFunction2("Hello again!");
    echo '<br><br>';

    // Default message
    function myFunction3($message2 = "default message") {
        echo($message2);
    }
    myFunction3();
    echo '<br><br>';

    // Function with multiple arguments
    function myFunction4($message3, $times) {
        for ($i=0; $i < $times; $i++) { 
            echo "$message3 <br>";
        }
    }
    myFunction4("Peek-a-boo", 3);
    echo '<br><br>';

    // Simple Sum function
    function sum(int $x, int $y) {
        return $x + $y;
    }
    $result = sum(8, 5);
    echo $result;
?>