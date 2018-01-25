<?php
    if(isset($_GET['language'])) {
        $language = $_GET['language'];
        echo 'You selected ' . $language . '.';
    }
?>