<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    $users = $db->query("SELECT email, created, CONCAT(firstname, ' ', lastname) AS fullname, firstname, lastname FROM users");

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
        <p>We currently have <?php $users->num_rows; ?> registered users.</p>
        <?php while($user = $users->fetch_object()): ?>
            <div class="user">
                <h5><?php echo $user->email; ?></h5>
                <p><?php echo $user->fullname; ?></p>
            </div>
        <?php endwhile; ?>
    </body>
</html>
