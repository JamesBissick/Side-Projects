<?php
    $likes = 'eating,drinking,the gym,pizzas,horror films, meditation';
    $likes = explode(',', $likes);

    print_r($likes);
    echo '<br><br>';
    foreach($likes as $key => $like) {
        echo $like . ' at position ' . $key . '<br>';
    }

    // You could use explode if you want to pick every single words of an article for example
?>