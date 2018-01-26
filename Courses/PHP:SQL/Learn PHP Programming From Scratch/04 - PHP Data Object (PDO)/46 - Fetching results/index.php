<?php
    ini_set('display_errors', 'On');

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
    $users = $db->query("
        SELECT * FROM users
    ");
    echo '<pre>', var_dump($users->fetch(PDO::FETCH_ASSOC)), '</pre>'; // Without (PDO::FETCH_ASSOC) we get duplicates of each entry, it's too much.
    
?>