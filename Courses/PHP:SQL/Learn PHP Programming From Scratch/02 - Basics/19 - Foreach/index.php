<?php
    $num = 1;
    $names = array('Alex', 'Billy', 'Dale');
    //First we call the variable $names, then we put it as a variable $value, then we put the command
    foreach($names as $value){
        echo 'Name' .$num . ' is ' . $value .'.<br>';
        $num++;
    }
echo '<br>';
    $names = array('Alex'=>21, 'Billy'=>16, 'Dale'=>49);
    //First we call the variable $names, then we put it as a variable $value, then we put the command
    foreach($names as $key => $value){
        echo $key . ' is ' . $value .'.<br>';
    }
echo '<br>';
    // In this case, if key isn't 'Alex' then echo it out, it will return Billy and Dale, but not Alex
    foreach($names as $key => $value){
        if($key!='Alex'){
            echo $key . ' is ' . $value .'<br>';
        }
    }
?>