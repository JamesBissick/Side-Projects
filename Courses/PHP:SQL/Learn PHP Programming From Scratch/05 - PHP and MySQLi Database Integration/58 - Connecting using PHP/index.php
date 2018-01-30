<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    //echo '<pre>', var_dump($db) , '</pre>';

    //Check if we can connect to the database or make it die('message')
    if($db->connect_errno !== 0) {
        die('We are down at the moment, try again soon.');
    }
?>