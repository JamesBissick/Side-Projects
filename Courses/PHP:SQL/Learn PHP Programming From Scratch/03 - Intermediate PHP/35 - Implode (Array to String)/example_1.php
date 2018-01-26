<?php
    $names = array('James', 'Billy', 'Jeremy', 'Fisher');
    echo implode(',', $names);
    echo '<br><br>';

    $names_str = null;
    foreach($names AS $key => $name) { 
        $names_str .= $name;
        if($key != (count($names) - 1)) { // If the key is not equal to the count of ($name - 1) (because counts start at 1 and indexes start at 0)
            $names_str .= ', ';
        }
    }
    echo $names_str;
?>