<form action="index.php" method="POST">
    Please enter your password:<br>
    <input type="password" name="password"><br>
    <input type="submit" value="Validate">
</form>

<?php
    $password = 'starfish';
    if(isset($_POST['password']) && !empty($_POST['password'])) { // $_POST['password'] refers to the input named password
        $password_post = $_POST['password'];
        error_reporting(0); // Hide the php notice error
        if($_password_post == $password) {
            echo 'Correct password';
        } else {
            echo 'Incorrect password';
        }
    }
?>