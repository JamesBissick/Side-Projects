<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    
    $users = $db->prepare("SELECT email, firstname, lastname FROM users WHERE firstname = ?");
    $users->bind_param('s', $_GET['firstname']);

    $users->execute();
    $users->bind_result($email, $firstname, $lastname);

    while($users->fetch()) {
        echo $email, '<br>';
    }
?>