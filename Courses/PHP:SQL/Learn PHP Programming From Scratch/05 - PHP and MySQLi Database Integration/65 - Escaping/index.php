<?php
// Protecting yourself from SQL injections
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');

    if(!empty($_POST)) {
        //real_escape_string() to prevent from SQL injection, can be shorten to escape_string();
        $email = $db->real_escape_string($_POST['email']);
        $firstname = $db->real_escape_string($_POST['firstname']);
        $lastname = $db->escape_string($_POST['lastname']);
        $insert = $db->query("INSERT INTO users (email, firstname, lastname, created) VALUES ('{$email}', '{$firstname}', '{$lastname}', NOW())");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MySQLi</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="submit" value="Sign up">
            <?php  ?>
        </form>
    </body>
</html>