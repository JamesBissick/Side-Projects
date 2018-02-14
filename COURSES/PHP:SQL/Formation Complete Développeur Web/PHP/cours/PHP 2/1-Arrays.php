<?php
    // Basic arrays (again...)
    $week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

    var_dump($week);
    echo '<br>';
    echo $week[1];
    echo '<br>';
    echo "Number of days in a week = " . count($week);
    echo '<br><br>';

    for ($i=0; $i < count($week) ; $i++) { 
        // To display, use the index for each day of the week, 0 = Monday, 1 = Tuesday, etc
        echo $week[$i] . '<br>';
    }

    echo '<br>';

    // Associative arrays

    $people = array("Pierre" => 30, "Paul" => "42", "Jacques" => 53);
    // echo $people["Pierre"];

    // $Variable as $key => $value (changed as $name and $age for clarity)
    foreach ($people as $name => $age) {
        echo "$name a $age ans.<br>";
    }

?>