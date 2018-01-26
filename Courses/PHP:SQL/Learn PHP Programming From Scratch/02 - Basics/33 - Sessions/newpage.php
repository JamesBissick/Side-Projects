<?php
    session_start();
    //echo $_SESSION['name'];
    // How to unset a session
    //unset($_SESSION['name']); // Will unset a specific session
    //or
    session_destroy(); //Will destroy a session that you currently hold
    //You can either use sessions(short term) or coockies(long term, ex: 'Remember me' checkbox)
?>