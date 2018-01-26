<?php

//A. Checking for errors
    ini_set('display_errors', 'On');

    try {
//B. Connecting to a database
    $db = new PDO('mysql:localhost;dbname=pdo', 'root', ''); // 1. driver we want to use: 'mysql:host;dbname=' 2. root 3. ''
    } catch(PDOException $e) {
        var_dump($e->getMessage());
    }

?>