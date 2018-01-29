<?php
    // This is a security exercice. Create a statement to select the user by the id, cleaner than escaping
    ini_set('display_errors', 'On');

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
    // Check if the value in the query string isn't empty
    if(!empty($_GET['user'])) {
        $req = $db->prepare("SELECT * FROM users WHERE id = :user_id AND firstname = :first_name"); // Use a placeholder ":user_id" instead of writing the id directly
        // Execute the query, inside paste a list of all the placeholders and their values
        $req->execute(['user_id' => $_GET['user'], 'first_name' => $_GET['name']]);
        var_dump($req->fetchObject());
    }

?>