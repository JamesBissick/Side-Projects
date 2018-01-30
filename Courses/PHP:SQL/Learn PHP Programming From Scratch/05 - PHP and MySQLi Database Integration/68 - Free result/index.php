<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    $req = $db->query("SELECT email, created, CONCAT(firstname, ' ', lastname) AS fullname FROM users");

    echo $req->fetch_object()->email;
    $req->free();
?>