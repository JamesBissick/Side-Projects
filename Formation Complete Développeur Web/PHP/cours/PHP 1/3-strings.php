<?php
//Lenght of $message
    $message = "Hello, my name is James.";
    echo strlen($message); 
    echo '<br>';

//Number of words of $message
    echo str_word_count($message); 
    echo '<br>';

//$message in reverse
    echo strrev($message); 
    echo '<br>';

// Find the word 'James' position inside $message
    echo strpos($message,"James"); 
    echo '<br>';

// Replace word by another word
    $var1 = "com";
    $var2 = "fr";
    $var3 = "Browsing the website Google.com";
    echo str_replace($var1, $var2, $var3);
?>