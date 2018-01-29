<?php
    ini_set('display_errors', 'On');

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

    $req = $db->query("
        SELECT * FROM users
    ");
    /* while($user = $req->fetchObject()) {
        echo $user->email . '<br>';
    } */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PDO</title>
    </head>
    <body>
        <?php while($user = $req->fetchObject()): ?>
            <div class="user">
                <h4><?php echo $user->firstname; ?></h4>
                <p><?php echo $user->email; ?> </p>
            </div>
        <?php endwhile ?>
    </body>
</html>