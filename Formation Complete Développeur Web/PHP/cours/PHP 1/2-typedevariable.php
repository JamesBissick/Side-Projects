<?php
    $string = 'Hello, I am James';
    $integer = 7;
    $decimal = 12.5;
    $boolean = true;

    /* echo $message;
    echo '<br>';
    echo $message; */
    var_dump($decimal);
    echo '<br>';

    // Arrays
    $Week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    var_dump($Week);
    echo '<br>';

    // Objects
    class Car {
        function __construct() {
            $this->color = "Blue";
        }
    }
    $myCar = new Car();
    var_dump($myCar);
?>