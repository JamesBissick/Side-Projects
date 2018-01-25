<?php
    $name = "Jimmy";
    if($name == "James") {
        echo "Hi, James.";
    } else {
?> <!-- Don't want to have to write a whole bunch of HTML code in echo? 
    End with ?> just after the block starts (the beginning of the code after the curly bracket) -->
        You're not Alex? Please type your name: <br> 
        <form action="index.php" method="POST">
            <input type="text" name="name">
            <input type="submit" value="Submit">
        </form>
    <!-- Start a new tag just before the last curly bracket. Otherwise you'll get a parse error. -->
<?php
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            if(!empty($name)) {
                echo 'Hi, ' . $name . '.';
            } else {
                echo 'Please enter your name.';
            }
        }
    } 
?>