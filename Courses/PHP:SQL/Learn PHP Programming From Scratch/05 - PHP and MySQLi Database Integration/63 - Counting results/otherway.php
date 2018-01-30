<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    $usersResult = $db->query("SELECT COUNT(id) AS count FROM users");

    $users = $usersResult->fetch_Object();
    var_dump($users);
    echo $users->count;
?>