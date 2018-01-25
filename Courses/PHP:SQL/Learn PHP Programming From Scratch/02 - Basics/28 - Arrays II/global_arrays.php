<?php
    // Let's change our $levels variable into a global variable instead
    $GLOBALS['level'] = array(
        1 => array(
            'name' => 'Level 1', 
            'description' => 'This is the first level.'
        ), 
        2 => array(
            'name' => 'Level 2', 
            'description' => 'This is the second level.'
        ), 
        3 => array(
            'name' => 'Level 3', 
            'description' => 'This is the third and last level.',
            'bonus' => 'If you succeed this level you\'ll get 1 BTC.',
            'points' => array(1 => '1000pts')
        )
    );
    function level_data($level, $data) {
        // I want to check if this array key exist, use array_key_exists()
        if(array_key_exists($level, $GLOBALS['level']) === TRUE) {
            return $GLOBALS['level'][$level][$data];
        } else {
            return FALSE;
        }
    }

    var_dump(level_data(1, 'description'));

    echo $GLOBALS['level'][2]['description'];
    echo '<pre>', print_r($GLOBALS, TRUE),'</pre>';

    
?>