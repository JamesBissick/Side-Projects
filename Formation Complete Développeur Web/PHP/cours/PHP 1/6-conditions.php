<?php
    // Basic conditions
    $motivation = 8;

    if($motivation < 3) {
        echo 'Oh, wow, you need to remind yourself of your purpose!';
    } 
    else if($motivation < 7) {
        echo 'Keep on focusing, you\'re doing great enough.';
    } else {
        echo 'Nice, you\'re motivated! The sky is the limit. But humankind broke this limit years ago!';
    }

    echo '<br>';

    // Switch
    $objective = '';

    switch ($objective) {
        case 'Freelance':
            echo 'Freelance is great!';
            break;
        case 'Remote work':
            echo 'Working at home.';
            break;
        case 'Create a Portfolio':
            echo 'Best way to display your work';
            break;     
        default:
            echo 'Choose an objective.';
            break;
    }
?>