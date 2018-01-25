<?php
    // I'll check if the agree checkbox has been checked
    if(isset($_POST['agree']) && $_POST['agree'] == 'true') { // If isset $_GET agree
        echo 'Ready, Set, Go!';
    } else {
        echo 'You must agree to the Terms and Conditions.';
    }
?>