<?php 
    session_start(); // Always put session at the start
    $_SESSION['name'] = 'James';
    echo $_SESSION['name'];
?>