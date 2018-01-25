<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if(!empty($name)) {
            $sentence = $name . ' woke up, and made a PHP tutorial.';
        } else {
            echo 'Please enter your name';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Embedding HTML within PHP</title>
    </head>
    <body>
    <!-- Example 1 -->
        <strong>James</strong>
        <em>
            <?php
                echo ' Harrys<br><br>';
            ?>
        </em>
    <!-- Example 2 -->
    <!-- In this case we want the value of $_POST['name'] to be stored as the value of textarea -->
        <form action="index.php" method="POST">
            Type your name : <input type="text" name="name" value="<?php echo $name; ?>">
            <input type="submit" value="Submit">
        </form>
        <br>
        <textarea cols="30" rows="10"><?php echo $sentence; // Embedding the sentence inside the textarea?></textarea>
    </body>
</html>