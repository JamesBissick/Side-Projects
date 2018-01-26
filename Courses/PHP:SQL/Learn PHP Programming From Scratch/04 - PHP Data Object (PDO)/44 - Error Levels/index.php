<?php

//A. Checking for errors
    ini_set('display_errors', 'On');

//B. Connecting to a database
    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        $db->query("INVALID");
    } catch(PDOException $e) {
        //die('Something went wrong.'); // We can use die() to kill the page and write a specific message
        var_dump($e->getMessage());
    }

?>