<?php
    $db = new mysqli('localhost', 'root', '', 'mysqlidatabase');
    
    $updateUser = $db->query("UPDATE users SET lastname = 'Gallo'");

    echo "{$db->affected_rows} rows were updated"; 
    // 3 rows were updated
    // refresh again, 0 rows were updated
?>