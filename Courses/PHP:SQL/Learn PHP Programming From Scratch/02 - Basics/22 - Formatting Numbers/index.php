<?php
    $numA = 27658;
    echo 'I have £' . number_format($numA) . ' in my bank account.'; // Automatically format the number with the necessary commas

echo '<br>';

    // Now let's had a decimal number
    $numB = 7657587.453645;
    echo 'I just got ' . number_format($numB, 2) . '$ in Bitcoins!'; // This time since it's a decimal number, we need to indicate what number of decimals we'll show.
?>