<?php
    // Let's learn how to use the PDO query methods

    ini_set('display_errors', 'On');

    $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', ''); // I tried localhost but it did not work so I put host=127.0.0.1 instead
    // Let's make a var_dump to see exactly what PDO is.
    //var_dump($db); it is: object(PDO)#1 (0) { }
    $users = $db->query("
        UPDATE users
        SET lastname = 'Smith'
        WHERE id = 1
    ");
    var_dump($users); // object(PDOStatement)#2 (1) { ["queryString"]=> string(78) " UPDATE users SET lastname = 'Smith' WHERE id = 1 " }
?>