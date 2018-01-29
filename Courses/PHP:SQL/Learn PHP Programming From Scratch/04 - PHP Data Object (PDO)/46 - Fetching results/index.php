<?php
    ini_set('display_errors', 'On');

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
    $req = $db->query("
        SELECT * FROM users
    ");
    echo '<pre>', var_dump($req->fetchAll(PDO::FETCH_ASSOC)), '</pre>'; // Without (PDO::FETCH_ASSOC) we get duplicates of each entry, it's too much.
    //echo '<br>';
    //echo '<pre>', var_dump($users->fetch(PDO::FETCH_ASSOC)['firstname']), '</pre>'; // This will only pull out email
    // Same as above
    //$users = $req->fetch(PDO::FETCH_ASSOC);
    //echo $users['email'];
?> 