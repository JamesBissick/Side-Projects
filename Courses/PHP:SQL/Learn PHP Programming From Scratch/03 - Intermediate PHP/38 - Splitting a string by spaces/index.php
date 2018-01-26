<?php
    // In a perfect world we could split up our string thanks to a whitespace
    $stringA = 'Blue car';
    $keywordsA = explode(' ', $stringA);

    print_r($keywordsA);
    echo '<br>';

    // Sadly, there's no such thing as a perfect world. What if there's more whitespace randomly placed?
    $stringB = ' Blue   car  ';
    $keywordsB = explode(' ', $stringB);
    print_r($keywordsB);
    echo '<br>';

    // Solution: use the function trim()
    $stringC = trim(' Blue   car      sales');
    $keywordsC = preg_split('/[\s]+/', $stringC); // Instead of explode(), use preg_split(); the + means any amount of [\s]
    print_r($keywordsC);

?>