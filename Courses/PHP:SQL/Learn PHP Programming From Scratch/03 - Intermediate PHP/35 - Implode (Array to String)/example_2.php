<?php
    // Collect and process data

    $name = 'James';
    $age = 25;
    $email = 'jamescooper@gmail.com';
    $message = "Nice website! Really lovely.";
    $tel = '0235784127';
    
    $data = array(
        'name' => $name,  // Associative key 'something' => 'that'
        'age' => $age,
        'email' => $email,
        'message' => $message,
        'telephone' => $tel
    );
    print_r($data); // It's good practice to print_r to see what happens
    echo '<br><br>';

    // We want to generate a list of fields that we will insert into $sql
    // Let's pass throught the keys not their values, let's use the backticks to match the INSERT TO format
    $fields_sql = '`' . implode('`, `', array_keys($data)) . '`';

    //Now we want to include the values as well
    $values_sql = '\'' . implode('\', \'', $data) . '';

    // I want to create a query for this, usually we creat a mysql option, but i'll just use a variable $sql

    /* 
    $sql = "INSERT INTO `table (`$name`, `$age`, `$email`, `$message`)
            VALUES (`$name`, `$age`, `$email`, `$message`)
    "; 
    */
    // Same as above but written in a much simpler way. But why are we doing this exactly?
    // Well, if you ever need to add another field into the database table, it's really easier to manage this way. Let's add a telephone field.
    $sql = "INSERT INTO `table ($fields_sql)
            VALUES ($values_sql)
    ";
    echo $sql;
?>