<?php
    $exp = time() + 86400; // We want the cookie to expired after one day, 60sec*24 = 86400 = a day,
    setcookie('name', 'Alex',$exp);
    setcookie('age', 19, $exp);

    if(isset($_COOKIE['name'])) {
        echo 'Cookie is set.';
    } else {
        echo 'Cookie is not set.';
    }
    $exp_unset = time() - 86400;
    // How to unset a cookie
    setcookie('name', '', $exp_unset);
?>