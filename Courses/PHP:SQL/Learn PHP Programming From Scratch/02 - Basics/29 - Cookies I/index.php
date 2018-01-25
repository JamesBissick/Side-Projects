<?php
    $exp = time() + 86400; // We want the cookie to expired after one day, 60sec*24 = 86400 = a day,
    setcookie('name', 'Alex',$exp);
    setcookie('age', 19, $exp);

    echo $_COOKIE['name'] . " is " . $_COOKIE['age'];
    echo '<br>';
    print_r($_COOKIE);
?>