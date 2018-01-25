<?php
    $levels = array(
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
    // We can also update and add arrays in a faster way
    $levels[4]['name'] = 'Level 4';
    
    print_r($levels);
    echo '<br><br>';

    echo '<mark>' . $levels[3]['points'][1] . '</mark>'; // I chose to put the result in highlight for clarity
    // Now, let's try to put a readable format for these
    echo '<pre>', print_r($levels, TRUE),'</pre>';

    
?>