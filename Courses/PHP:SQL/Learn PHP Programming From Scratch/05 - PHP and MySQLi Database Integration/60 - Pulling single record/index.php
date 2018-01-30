<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    $user = $db->query("SELECT * FROM users WHERE id = 1");

    $user = $user->fetch_assoc();
    //var_dump($user);

    echo $user['email'];
?>