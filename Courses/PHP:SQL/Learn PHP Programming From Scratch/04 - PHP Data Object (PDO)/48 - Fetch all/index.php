<?php
    ini_set('display_errors', 'On');

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

    $req = $db->query("
        SELECT * FROM users
    ");

    // THis is in comments so that the last example can work
    /* $req = $req->fetchAll(PDO::FETCH_ASSOC); // Remember to use PDO::FETCH_ASSOC to avoid duplicates of each entry
    // Let's fetch only emails with a while loop
    foreach($req AS $user) {
        echo $user['email'] . '<br>'; 
    } */

    // Last example, this will look a lot nicer
    $req = $req->fetchAll(PDO::FETCH_OBJ);
    foreach($req AS $users) {
        echo $users->email . '<br>';
    }
?>
<!-- This is an even more nicer way of displaying our request -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PDO</title>
    </head>
    <body>
        <?php foreach($req AS $users): ?> <!-- Don't forget the : at the end or you'll get a syntax error -->
            <div class="user">
                <h4><?php echo $users->firstname; ?></h4>
                <p><?php echo $users->email ?></p>
            </div>
        <?php endforeach ?>
    </body>
</html>