<?php
    ini_set('display_errors', 'On');

    // Create a class called user

    class User {
        // Adding a public function that will be available outsite of the class
        public function getFullName() {
            return "{$this->firstname} {$this->lastname}";
        }
    }

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

    $req = $db->query("
        SELECT * FROM users
    ");

    // How to pull users out of the database represented by a class and applied our own method and properties to that class
    $req->setFetchMode(PDO::FETCH_CLASS, 'User'); // Put a second argument as our class named 'User'
    $users = $req->fetch();

    //echo '<pre>', var_dump($users), '</pre>';

    // Why use this method? What if we want to output the user's full name or manipulate the created date
    // The difference is that we're working with the User class
    /* while($user = $req->fetch()) {
        echo $user->email, '<br>';
    } */
    // Let's implement a method to this class
    while($user = $req->fetch()) {
        //echo "{$user->firstname} {$user->lastname}<br>";
        // What happend if the lastname doesn't exist, isn't stored? Let's add a public function called getFullName and put what we wrote inside of it
        // Now we can echo our newly created function (Note that it is good practice to right our class in a seperated file!)
        echo $user->getFullName() . '<br>';
    }
?>