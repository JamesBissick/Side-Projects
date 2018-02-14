<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Presentation</title>
    </head>
    <body>
        <h1>
            <?php
                echo "Hello, I'm " . $_GET['name'] . " and I'm " . $_GET['age'] . "years old.";
            ?>
        </h1>
        <!-- And you can see that the super global $_GET is an array -->
        <p><?php var_dump($_GET); ?></p> 
    </body>
</html>