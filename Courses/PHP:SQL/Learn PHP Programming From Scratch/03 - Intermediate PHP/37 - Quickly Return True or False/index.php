<?php

// I want a function that says if my $val eaquals 1
    // A. We could do this so.
        function equals_1($valA) {
            return ($valA === 1) ? TRUE : FALSE;
        }
        var_dump(equals_1(3)); // Remember that functions require parameters, in this case 3 is the only parameter

        echo '<br>';
    // B. Or this way.
        function equals_one($val) {
            return $val === 1;
        }
        var_dump(equals_one(1));
?>