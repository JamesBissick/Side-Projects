<?php
//When inserting new records it's often useful to to be able to get the last inserted ID

    ini_set('display_errors', 'On');

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
    // Check if asked infos are available
    if(!empty($_POST)) {
        $email = $_POST['email'];
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];

        // Prepare the database
        $req = $db->prepare("INSERT INTO users (email, firstname, lastname) VALUES (:email, :firstname, :lastname)");

        // Execute the request
        $result = $req->execute([
            'email' => $email,
            'firstname' => $firstName,
            'lastname' => $lastName
        ]);
        var_dump($db->lastInsertId()); // Use the method lastInsertId() to get the last inserted...ID, ofc
        die();
    }

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
        <form action="index.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="submit" value="Register">
        </form>
    </body>
</html>

