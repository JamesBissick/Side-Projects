<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    $users = $db->query("SELECT SQL_CALC_FOUND_ROWS id FROM users");
    $countResult = $db->query("SELECT FOUND_ROWS() as count");

    var_dump($countResult->fetch_object());
?>