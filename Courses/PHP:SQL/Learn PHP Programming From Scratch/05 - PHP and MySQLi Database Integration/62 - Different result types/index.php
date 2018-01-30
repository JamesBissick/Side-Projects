<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    $user = $db->query("SELECT email, created, CONCAT(firstname, ' ', lastname) AS fullname FROM users");
    //$user = $user->fetch_object();

    //echo '<pre>', var_dump($user), '</pre>';
    while($row = $user->fetch_object()) {
        echo '<pre>', var_dump($row), '</pre>';
        echo $row->email . '<br>';
    }
    //echo $user->email;


?>
