<?php
    $x = 5;
    $y = 18;

    function addSum() {
        // $GLOBALS allows to use global variables
        echo $GLOBALS['x'];
    }
    addSum();
    echo '<br><br>';

    // Another super global $_SERVER
    var_dump($_SERVER);
    echo '<br>';
    echo $_SERVER["SERVER_ADDR"];
    echo '<br><br>';

    // $_REQUEST, $_GET, $_POST, $_FILES etc
?>