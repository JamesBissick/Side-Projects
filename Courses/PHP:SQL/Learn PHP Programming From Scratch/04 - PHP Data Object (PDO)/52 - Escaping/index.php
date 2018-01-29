<?php
    ini_set('display_errors', 'On');

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

    if(!empty($_GET['user'])) {
        //How to protect your code and database from SQL injections, use $db->quote()
        $userID = $db->quote($_GET['user']);
        $user = $db->query("SELECT * FROM users WHERE id = {$userID}");
        var_dump($user->fetchObject());
    } 

    
?>