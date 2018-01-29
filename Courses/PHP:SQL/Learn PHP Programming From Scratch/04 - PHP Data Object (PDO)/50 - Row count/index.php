<?php
    // Setting the display error
    ini_set('display_errors', 'On');
    // Connect to our database
    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
    /* // Setting up our request
    $req = $db->query("SELECT count(id) AS count FROM users");
    echo $req->fetchObject()->count; */
    // Let do this request in a much easier way
    $req = $db->query("SELECT * FROM users");
    $req->fetchAll(PDO::FETCH_OBJ);

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
        <p>There are <?php echo $req->rowCount(); ?> registered users.</p> <!-- Initially this was a x, we replaced it to actually display the count -->
        <?php foreach($req AS $user): ?>
            <?php echo $user->email; ?><br>
        <?php endforeach; ?>
    </body>
</html>