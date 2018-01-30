<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    $user = $db->query("SELECT email, created, CONCAT(firstname, ' ', lastname) AS fullname FROM users");

    //var_dump($user->fetch_assoc());

    /* while($row = $user->fetch_assoc()) { 
        echo '<pre>', var_dump($row), '</pre>';
    } */

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
        <?php while($row = $user->fetch_assoc()): ?>
            <p><?php echo $row['fullname']; ?>, <?php echo $row['email']; ?>, <?php echo $row['created']; ?></p>
        <?php endwhile; ?>
    </body>
</html>