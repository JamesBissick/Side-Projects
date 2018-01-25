<!-- Create a form so that we can input value into $_GET variables, they will appear in the url -->
<form action="index.php" method="GET">
    Name:<br><input type="text" name="name"><br>
    Age:<br><input type="text" name="age"><br><br>
    <input type="submit" value="Validate">
</form>

<?php
    error_reporting(0); // Hide the php notice error
    $name = $_GET['name'];
    $age = $_GET['age'];

    if (isset($name) && isset($age)) {
        if(!empty($name) && !empty($age)) {
            echo 'I am ' . $name . ' and I\'m ' . $age . ' years old.';
        }
        else {
            echo 'Nothing entered.';
        }
    } else {
        echo 'Please, enter your name and your age.';
    }
    
?>